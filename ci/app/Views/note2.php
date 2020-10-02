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
                        <li class="breadcrumb-item">
                            <a href="note">Note</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Note</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="postnoteupdate">
                            <input type="hidden" name="id" value="<?= $notedata['id'] ?>">
                            <input type="hidden" name="class" value="<?= $notedata['class'] ?>">
                            <input type="hidden" name="subject" value="<?= $notedata['subject'] ?>">
                            <input type="hidden" name="week" value="<?= $notedata['week'] ?>">
                            
                            <input class="form-control mb-4" type="text" name="topic" value="<?= $notedata['topic'] ?>" placeholder="Note topic">
                            <textarea id="editor" name="content" class="mt-3">
                                <?= $notedata['content'] ?>
                            </textarea>
                            <input class="btn btn-primary" type="submit" value="Update">
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