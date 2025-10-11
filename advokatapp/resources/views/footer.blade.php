        <footer>
            <div class="copyright">
                <p class="text">
                    © 2003 - <?php echo date('Y'); ?> |
                    <a target="_blank" href="https://sierra-group.dev/?utm_source=Advokaty&utm_medium=direct">
                        IT support of PP "SIERRA GROUP"
                    </a>
                </p>
            </div>
        </footer>
    </div> <!-- end of container fluid -->
        <!-- Modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Human appeal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        LOGIC
                        <form id="formddd">
                            <input id="name" type="text" name="name">
                            <input id="number" type="number" name="phone">
                            <input type="submit" >
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Send</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="CallMe">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="title modal-title">Request a call</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('components.form-call')
                    </div>

                </div>
            </div>
        </div>

        </body>
        <!-- В конце страницы -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</html>
