<div class="modal fade" id="share_post_modal" tabindex="-1" aria-labelledby="sharePostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content justify-content-center">
            <div class="modal-header">
                <h5 class="modal-title" id="sharePostModalLabel">Share Post</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body justify-content-center">
                <div class="row">
                    <!-- Facebook -->
                    
                    <div class="col text-center">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') . '/' . $item->slug }}" class="share-icon" target="_blank">
                            <img width="28" src="https://img.icons8.com/color/28/000000/facebook-new.png" alt="Facebook">
                        </a>
                    </div>
                    <!-- Twitter -->
                    <div class="col text-center">
                        <a href="https://twitter.com/intent/tweet?text=Default+share+text&url={{ url('/') . '/' . $item->slug }}" class="share-icon" target="_blank">
                            <img width="28" src="https://img.icons8.com/color/28/000000/twitter--v2.png" alt="Twitter">
                        </a>
                    </div>
                    <!-- LinkedIn -->
                    <div class="col text-center">
                        <a href="https://www.linkedin.com/sharing/share-offsite?mini=true&url={{ url('/') . '/' . $item->slug }}" class="share-icon" target="_blank">
                            <img width="28" src="https://img.icons8.com/color/28/000000/linkedin.png" alt="LinkedIn">
                        </a>
                    </div>
                    <!-- WhatsApp -->
                    <div class="col text-center">
                        <a href="https://wa.me/?text={{ url('/') . '/' . $item->slug }}" class="share-icon" target="_blank">
                            <img width="28" src="https://img.icons8.com/color/28/000000/whatsapp--v2.png" alt="WhatsApp">
                        </a>
                    </div>

                    <div class="col text-center">
                        <a href="#" class="share-icon" id="copyLink">
                            <img width="28" src="https://img.icons8.com/fluency/28/copy.png" alt="copy"/>
                        </a>
                        
                        
                        
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('copyLink').addEventListener('click', function(event) {
        event.preventDefault();
        var text = "{{ url('/') . '/' . $item->slug }}";
        copyToClipboard(text);
    });

    function copyToClipboard(text) {
        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        alert("Link copied to clipboard!");
    }
</script>
