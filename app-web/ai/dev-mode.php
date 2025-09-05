<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->

<!-- 

Display DEV

-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/codemirror.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/mode/xml/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/mode/javascript/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/mode/css/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.7/mode/htmlmixed/htmlmixed.min.js"></script>
<style type="text/css">
    .dev{
        position: absolute;
        width: 100%;
        height: 100vh;
        background-color: #fff;
    }

    .code-livepreview{
        display: flex;
        flex-grow: 1;
        gap: 10px;
        padding: 10px;
    }
    .code{
        flex: 40%;
        border: 5px solid var(--color3);
        border-radius: 20px;
        padding: 10px;
    }
    .CodeMirror{
        width: 100%;
        height: 80vh !important;
    }
    .live-preview{
        flex: 30%;
    }
    .live-preview iframe{
        width: 100%;
        height: 80vh !important;
        border: 1px solid #666;
        border-radius: 10px;
    }
</style>

<section class="dev" id="dev">
    <div class="code-livepreview">
        <div class="code">
            <form>
                <textarea id="code" placeholder=""><?php echo $dev; ?></textarea>
                <div class="clear20x"></div>
                <input type="submit" class="btn-color1" value="salvar">
            </form>
        </div>

        <div class="live-preview">
            <iframe id="live-preview"></iframe>
        </div>
    </div>
</section>

<script type="text/javascript">
    const livePreview = document.getElementById('live-preview');
    const codeTextArea = document.getElementById('code'); 
    const cmHtml = CodeMirror.fromTextArea(codeTextArea, {
        mode: "htmlmixed",
        lineNumbers: true
    });

    function updatePreview() {
        const htmlContent = cmHtml.getValue();
        const fullHTML = `<!DOCTYPE html><html><head><link rel="stylesheet" href="gfx/graffiti.css?v=<?php echo rand() ?>"></head><body>${htmlContent}</body></html>`;
        livePreview.srcdoc = fullHTML;
    }
    
    cmHtml.on("change", updatePreview);
    updatePreview();
</script>