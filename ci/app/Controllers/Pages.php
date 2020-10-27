<?php namespace App\Controllers;

use Config\App;

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
		$session = session();
		$subjects = [['subject'=>$session->subj1],['subject'=>$session->subj2]];
		$notes = new \App\Models\Notes();
		$note = $notes->where(['subject' => $session->subj1])->orWhere(['subject' => $session->subj2])->find();
		$sidebar_data = [
			'note_count' => count($note),
		];
		$data = [
			'subjects' => $subjects,
			'notes' => $note,
		];
		echo view('header');
		echo view('sidebar',$sidebar_data);
		echo view('note', $data);
		echo view('footerline');
		echo view('footer');
	}

	private function random(int $min, int $max, int $len)
	{
		$digits = '';
		$numbers = range($min,$max);
		shuffle($numbers);
		for($i=0;$i<$len;$i++){
			$digits .= $numbers[$i];
		}
		return $digits;
	}

	public function combo($id)
	{
		$Students = new \App\Models\Students();
		$combo1 = str_split($this->random(0,5,3));
		$combo2 = str_split($this->random(0,3,2));
		$data = [
			'combo1' => json_encode($combo1),
			'combo2' => json_encode($combo2),
		];
		if($Students->update($id, $data)){
			return true;
		} else{
			return false;
		}
	}

	public function generatecombo()
	{
		$Students = new \App\Models\Students();
		$students = $Students->findAll();
		foreach ($students as $key => $student) {
			$this->combo($student['id']);
			echo "Generated for ".$student['fname']."</br>";
		}
	}

	public function catlist()
	{
		$Cat = new \App\Models\Cat();
		$js1list = $Cat->where('class','JS1')->findAll();
		$js2list = $Cat->where('class','JS2')->findAll();
		$js3list = $Cat->where('class','JS3')->findAll();

		$data = [
			'js1list'=>$js1list,
			'js2list'=>$js2list,
			'js3list'=>$js3list,
		];
		echo view('catlist',$data);
	}

	public function catprint()
	{
		$Students = new \App\Models\Students();
		$id = $this->request->getGet('id');
		$class = $this->request->getGet('class');
		$students = $Students->where('class',$class)->findAll();
		foreach ($students as $key => $student) {
			$data = $this->printcat($student['id'], $id);
			echo view('printcat',$data);
		}
	}

	public function printcat($studentID,$catID)
	{
		$Students = new \App\Models\Students();
		$Cat = new \App\Models\Cat();
		$student = $Students->where('id',$studentID)->find()[0];
		$cat = $Cat->where('id',$catID)->find()[0];
		$combo1 = json_decode($student['combo1']);
		$combo2 = json_decode($student['combo2']);
		$cat['obj']= json_decode($cat['obj']);
		$cat['fig']= json_decode($cat['fig']);
		$cat['thr']= json_decode($cat['thr']);

		$objoutput = '<ol>';

			foreach ($combo2 as $key => $random) {
				$objoutput = $objoutput."
				<li>".((array) $cat['obj'][$random][0])[0]." (a)".((array) $cat['obj'][$random][0])[1]." (b)".((array) $cat['obj'][$random][0])[2]." (c)".((array) $cat['obj'][$random][0])[3]." (d)".((array) $cat['obj'][$random][0])[4]."</li>"
				;
			}
		$objoutput = $objoutput.'</ol>';

		$figoutput = '<ol>';
			foreach ($combo1 as $key => $random) {
				$figoutput = $figoutput."
				<li>".((array) $cat['fig'][$random][0])[0]."</li>"
				;
			}
		$figoutput = $figoutput.'</ol>';

		$throutput = '<ol>';
			foreach ($combo2 as $key => $random) {
				$throutput = $throutput."
				<li>".((array) $cat['thr'][$random][0])[0]."</li>"
				;
			}
		$throutput = $throutput.'</ol>';

		$data = [
			'obj'=> $objoutput,
			'fig'=> $figoutput,
			'thr'=> $throutput,
			'student'=> $student,
			'subject' =>$cat['subject'],
		];
		// echo view('printcat',$data);
		return $data;
	}

	public function cat()
	{
		$Cat = new \App\Models\Cat();
		$Subjects = new \App\Models\Subjects();
		$session = session();
		// $subjects = [['subject'=>$session->subj1],['subject'=>$session->subj2]];

		$subjects = $Subjects->findAll();
		$cat = $Cat->where(['subject' => $session->subj1])->orWhere(['subject' => $session->subj2])->find();
		$sidebar_data = [
			'note_count' => '',
		];
		$data = [
			'subjects' => $subjects,
			'notes' => $cat,
		];
		echo view('header');
		echo view('sidebar',$sidebar_data);
		echo view('cat', $data);
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
		$notes = new \App\Models\Notes();
		$incoming = $this->request->getGet();
		$noteid = $incoming['id'];
		$session = session();
		$data = [
			'notedata' => $notes->where('id', $noteid)->find()[0],
			'note_count' => '',
			'subjects' => [['subject'=>$session->subj1],['subject'=>$session->subj2]],
			'notes' => $notes->where(['subject' => $session->subj1])->orWhere(['subject' => $session->subj2])->find()
		];
		echo view('header');
		echo view('sidebar');
		echo view('note2', $data);
		echo view('footerline');
		echo view('footer');
	}

	public function updatecat()
	{
		$Cat = new \App\Models\Cat();
		$incoming = $this->request->getGet();
		$catid = $incoming['id'];
		$session = session();
		$catdata = $Cat->where('id', $catid)->find()[0];
		$catdata['obj']= json_decode($catdata['obj']);
		$catdata['fig']= json_decode($catdata['fig']);
		$catdata['thr']= json_decode($catdata['thr']);
		// $key =(array) $catdata['obj'];
		// var_dump($key[1]);
		$data = [
			'catdata' => $catdata,
			'note_count' => '',
			'subjects' => [['subject'=>$session->subj1],['subject'=>$session->subj2]],
			'notes' => $Cat->where(['subject' => $session->subj1])->orWhere(['subject' => $session->subj2])->find()
		];
		echo view('header');
		echo view('sidebar');
		echo view('cat2', $data);
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

	public function postcat()
	{
        $Cat = new \App\Models\Cat();
		$incoming = $this->request->getPost();
		
		$obj = [
			[$incoming['obj1']],
			[$incoming['obj2']],
			[$incoming['obj3']],
			[$incoming['obj4']],
		];
		$fig = [
			[$incoming['fig1']],
			[$incoming['fig2']],
			[$incoming['fig3']],
			[$incoming['fig4']],
			[$incoming['fig5']],
			[$incoming['fig6']],
		];
		$thr = [
			[$incoming['thr1']],
			[$incoming['thr2']],
			[$incoming['thr3']],
			[$incoming['thr4']],
		];
		$data = [
			'class' => $incoming['class'],
			'subject' => $incoming['subject'],
			'term' => $this->TERM,
			'obj' => json_encode($obj),
			'fig' => json_encode($fig),
			'thr' => json_encode($thr)
		];
		$res = $Cat->update($incoming['id'],$data);
		echo view('authheader');
		echo view('notemsg', ['msg'=>$res]);
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
