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
                        <li class="breadcrumb-item active" aria-current="page">Note</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="postnote">
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
                            <select name="week" class="form-control mb-4">
                                <option value="">Select a week</option>
                                <option value="week 1">Week 1</option>
                                <option value="week 2">Week 2</option>
                                <option value="week 3">Week 3</option>
                                <option value="week 4">Week 4</option>
                                <option value="week 5">Week 5</option>
                                <option value="week 6">Week 6</option>
                                <option value="week 7">Week 7</option>
                                <option value="week 8">Week 8</option>
                                <option value="week 9">Week 9</option>
                                <option value="week 10">Week 10</option>
                                <option value="week 11">Week 11</option>
                            </select>
                            <input class="form-control mb-4" type="text" name="topic" placeholder="Note topic">
                            <textarea id="editor" name="content" class="mt-3">
                            <p>Here goes the initial content of the editor.</p>
                        </textarea>
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