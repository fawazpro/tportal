<!-- Content body -->
<div class="content-body">
    <!-- Content -->
    <div class="content ">

        <div class="page-header">
            <div>
                <h3>Note</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Mid Term Test</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body container">
                        <form method="post" action="cat">
                            <select name="class" class="form-control mb-4">
                                <option value="">Select a class</option>
                                <option value="JS1">JS 1</option>
                                <option value="JS2">JS 2</option>
                                <option value="JS3">JS 3</option>
                            </select>
                            <select name="subject" class="form-control mb-4">
                                <option value="">Select a subject</option>
                                <?php foreach ($subjects as $key => $subject) : ?>
                                    <option value="<?= $subject['subject'] ?>"><?= $subject['subject'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <hr>
                            <p class="h3 text-center mb-4">Multiple Option Questions</p>
                            <label for="">Question 1:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="obj1[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="obj1[5]" placeholder="Answer...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col">
                                  <label for="Option A">Option A</label>
                                  <input type="text" class="form-control" name="obj1[1]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option B">Option B</label>
                                  <input type="text" class="form-control" name="obj1[2]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option C">Option C</label>
                                  <input type="text" class="form-control" name="obj1[3]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option D">Option D</label>
                                  <input type="text" class="form-control" name="obj1[4]">
                                </div>
                            </div>
                            <label for="">Question 2:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="obj2[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="obj2[5]" placeholder="Answer...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col">
                                  <label for="Option A">Option A</label>
                                  <input type="text" class="form-control" name="obj2[1]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option B">Option B</label>
                                  <input type="text" class="form-control" name="obj2[2]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option C">Option C</label>
                                  <input type="text" class="form-control" name="obj2[3]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option D">Option D</label>
                                  <input type="text" class="form-control" name="obj2[4]">
                                </div>
                            </div>
                            <label for="">Question 3:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="obj3[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="obj3[5]" placeholder="Answer...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col">
                                  <label for="Option A">Option A</label>
                                  <input type="text" class="form-control" name="obj3[1]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option B">Option B</label>
                                  <input type="text" class="form-control" name="obj3[2]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option C">Option C</label>
                                  <input type="text" class="form-control" name="obj3[3]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option D">Option D</label>
                                  <input type="text" class="form-control" name="obj3[4]">
                                </div>
                            </div>
                            <label for="">Question 4:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="obj4[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="obj4[5]" placeholder="Answer...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col">
                                  <label for="Option A">Option A</label>
                                  <input type="text" class="form-control" name="obj4[1]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option B">Option B</label>
                                  <input type="text" class="form-control" name="obj4[2]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option C">Option C</label>
                                  <input type="text" class="form-control" name="obj4[3]">
                                </div>
                                <div class="form-group col">
                                  <label for="Option D">Option D</label>
                                  <input type="text" class="form-control" name="obj4[4]">
                                </div>
                            </div>
                            <hr>
                            <p class="h3 text-center mb-4">Fill in the gap Questions</p>
                            <label for="">Question 1:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="fig1[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="fig1[1]" placeholder="Answer...">
                                </div>
                            </div>
                            <label for="">Question 2:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="fig2[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="fig2[1]" placeholder="Answer...">
                                </div>
                            </div>
                            <label for="">Question 3:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="fig3[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="fig3[1]" placeholder="Answer...">
                                </div>
                            </div>
                            <label for="">Question 4:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="fig4[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="fig4[1]" placeholder="Answer...">
                                </div>
                            </div>
                            <label for="">Question 5:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="fig5[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="fig5[1]" placeholder="Answer...">
                                </div>
                            </div>
                            <label for="">Question 6:</label>
                            <div class="row">
                                <div class="col-9 form-group">
                                    <input class="form-control" type="text" name="fig6[0]" placeholder="Question...">
                                </div>
                                <div class="col-3 form-group">
                                    <input class="form-control" type="text" name="fig6[1]" placeholder="Answer...">
                                </div>
                            </div>
                            <hr>
                            <p class="h3 text-center mb-4">Theory Questions</p>
                            <label for="">Question 1:</label>
                                    <input class="form-control" type="text" name="thr1[0]" placeholder="Question...">
                                    <input class="form-control mb-4" type="text" name="thr1[1]" placeholder="Answer...">
                            <label for="">Question 2:</label>
                                    <input class="form-control" type="text" name="thr2[0]" placeholder="Question...">
                                    <input class="form-control mb-4" type="text" name="thr2[1]" placeholder="Answer...">
                                    
                            <label for="">Question 3:</label>
                                    <input class="form-control" type="text" name="thr3[0]" placeholder="Question...">
                                    <input class="form-control mb-4" type="text" name="thr3[1]" placeholder="Answer...">
                                    
                            <label for="">Question 4:</label>
                                    <input class="form-control" type="text" name="thr4[0]" placeholder="Question...">
                                    <input class="form-control mb-4" type="text" name="thr4[1]" placeholder="Answer...">
                            <input class="btn btn-primary" type="submit" value="Upload">
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-title pt-3 pl-3">Note List</h3>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php foreach ($notes as $key => $note):?>
                            <li class="list-group-item"> <a href="updatenote?id=<?=$note['id']?>"><?= $note['class'].' '.$note['subject'].' '.$note['week'] ?></a> </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ./ Content -->

    <!-- CKEditor -->
    <script src="vendors/ckeditor5/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList', 'alignment'],
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        }
                    ]
                }
            })
    </script>