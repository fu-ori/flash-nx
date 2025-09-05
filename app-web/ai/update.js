$(document).ready(function() {
    $('.summernote-editor').summernote({
        placeholder: 'Escreva seu conteúdo aqui...',
        tabsize: 2,
        height: 400,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    $('form').on('submit', function(e) {
        e.preventDefault();

        const form = $(this);
        const submitBtn = form.find('.btn');
        const statusMessage = form.find('#status-message');
        const feedbackContainer = form.find('.form-feedback');

        feedbackContainer.removeClass('success error').show();
        statusMessage.text('Atualizando...');
        submitBtn.val('Atualizando...').prop('disabled', true);

        const editor = form.find('.summernote-editor');
        const content = editor.summernote('code');
        const viewName = form.find('input[name="view_name"]').val();

        $.ajax({
            type: "POST",
            url: "update.php",
            data: {
                view_name: viewName,
                editor_content: content
            },
            success: function(response) {
                feedbackContainer.addClass('success');
                statusMessage.text('Alterações salvas com sucesso!');
                setTimeout(() => {
                    feedbackContainer.hide();
                    submitBtn.val('Salvar').prop('disabled', false);
                }, 1300);
            },
            error: function(xhr, status, error) {
                feedbackContainer.addClass('error');
                statusMessage.text('❌ Ocorreu um erro ao salvar as alterações.');
                alert("❌ Ocorreu um erro ao salvar as alterações.");
                setTimeout(() => {
                    feedbackContainer.hide();
                    submitBtn.val('Salvar').prop('disabled', false);
                }, 1300);
            }
        });
    });

    const selectElement = document.getElementById("exemplo_select");
    const contentContainer = document.getElementById("content-container");
    selectElement.addEventListener("change", function() {
        const selectedValue = this.value;
        const allContentItems = contentContainer.querySelectorAll(".content-item");
        allContentItems.forEach((item) => {
            item.style.display = "none";
        });
        if (selectedValue) {
            const targetContent = document.getElementById("content-" + selectedValue);
            if (targetContent) {
                targetContent.style.display = "block";
            }
        }
    });
});