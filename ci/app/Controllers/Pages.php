<?php namespace App\Controllers;

class Pages extends BaseController
{
	public $TERM = 1;
	public $ADMINID = 2;

	public function index()
    {
        $session = session();
        if ($session->logged_in == TRUE) {
			$session = session();
			$this->note();
        } else {
            $this->login();
        }
    }
    
	public function register()
	{
        $subjects = new \App\Models\Subjects();
		$data = [
			'subjects' => $subjects->findAll(),
		];
		echo view('authheader');
		echo view('register', $data);
		echo view('footer');
	}
    
	public function login()
	{
		echo view('authheader');
		echo view('login');
		echo view('footer');
	}
	
	
    public function postlogin()
    {
        $users = new \App\Models\Teachers();
        $incoming = $this->request->getPost();
        $data = [
            'email' => $incoming['email'],
            'pass' => hash('sha256', $incoming['pass']),
        ];
        $result = $users->where($data)->find();
        if ($result) {
                $ses_data = [
                    'id' => $result[0]['id'],
                    'lname' => $result[0]['lname'],
                    'email' => $result[0]['email'],
                    'subj1' => $result[0]['subj1'],
                    'subj2' => $result[0]['subj2'],
                    'logged_in' => TRUE,
                ];
                $session = session();
                $session->set($ses_data);
                $this->index();
        } else {
            echo 'Login not Successful';
        }
    }
    
	public function postregister()
	{
        $teachers = new \App\Models\Teachers();
        $incoming = $this->request->getPost();
        $incoming['pass'] = hash('sha256',$incoming['pass'] ); 
        if ($incoming['scode'] == 'aaic2020') {
            $res = $teachers->save($incoming);
    
        if($res){
			$this->login();
        }
        }	
	}

	public function note()
	{
        $subjects = new \App\Models\Subjects();
		$notes = new \App\Models\Notes();
		$session = session();
		$data = [
			'subjects' => $subjects->findAll(),
			'notes' => $notes->where(['subject' => $session->subj1])->orWhere(['subject' => $session->subj2])->find()
		];
		echo view('header');
		echo view('sidebar');
		echo view('note', $data);
		echo view('footerline');
		echo view('footer');
	}

	public function printlist()
	{
		$session = session();
		if ($session->id == $this->ADMINID) {
			$notes = new \App\Models\Notes();
			$data = [
				'notes' => $notes->findAll()
			];
			echo view('printlist', $data);
		}else{
			echo('You are not authorise to view this page');
		}
		
	}

	public function print()
	{
		$id = $this->request->getGet('id');
		$session = session();
		if ($session->id == $this->ADMINID) {
			$notes = new \App\Models\Notes();
			$data = [
				'note' => $notes->where('id',$id)->find()[0]
			];
			echo view('print', $data);
		}else{
			echo('You are not authorise to view this page');
		}
	}

	public function updatenote()
	{
        $subjects = new \App\Models\Subjects();
		$notes = new \App\Models\Notes();
		$incoming = $this->request->getGet();
		$noteid = $incoming['id'];
		$session = session();
		$data = [
			'notedata' => $notes->where('id', $noteid)->find()[0],
			'subjects' => $subjects->findAll(),
			'notes' => $notes->where(['subject' => $session->subj1])->orWhere(['subject' => $session->subj2])->find()
		];
		echo view('header');
		echo view('sidebar');
		echo view('note2', $data);
		echo view('footerline');
		echo view('footer');
	}

	public function postnote()
	{
        $note = new \App\Models\Notes();
		$incoming = $this->request->getPost();
		$incoming['term'] = $this->TERM;
		
		$note->save($incoming);
		echo view('authheader');
		echo view('notemsg', ['msg'=>'The note upload was a success']);
		echo view('footer');
	}

	public function postnoteupdate()
	{
        $note = new \App\Models\Notes();
		$incoming = $this->request->getPost();
		$incoming['term'] = $this->TERM;
		
		$note->update($incoming['id'],$incoming);
		echo view('authheader');
		echo view('notemsg', ['msg'=>'The note update was a success']);
		echo view('footer');
	}

	//------rgb(0,153,51)-------------------------------------------------------------

}
