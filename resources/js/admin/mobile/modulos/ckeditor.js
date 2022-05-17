import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export let renderCkeditor = () => {

    let textareas = document.querySelectorAll(".ckeditor");

    textareas.forEach(textarea => {


        ClassicEditor
            .create(textarea)
            .then(ckeditor => {
                window.ckeditor = ckeditor;
            })
            .catch(error => {
                console.error('There was a problem initializing the editor.', error);
            });

        });     
}