        <footer>
            <div class="copyright">
                <p class="text">© 2009 - <?php echo date('Y'); ?> | <a target="_blank" href="https://sierra-group.in.ua/?utm_source=Advokaty&utm_medium=direct">IT підримка ПП"СІЄРРА ГРУП"</a></p>
            </div>
        </footer>
    </div> <!-- end of container fluid -->
        <!-- Modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Звернення людини</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ЛОГИКА
                        <form id="formddd">
                            <input id="name" type="text" name="name">
                            <input id="number" type="number" name="phone">
                            <input type="submit" >
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Відправити</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="CallMe">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="title modal-title">Замовити дзвінок</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('components.form-call')
                    </div>

                </div>
            </div>
        </div>

        </body>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfPBPckAAAAAMj87uv7cdlChQalPshmPVzs19p5"></script>
        <script>
            grecaptcha.enterprise.ready(function() {
                grecaptcha.enterprise.execute('6LfPBPckAAAAAMj87uv7cdlChQalPshmPVzs19p5', {action: 'login'}).then(function(token) {
                ...
                });
            });
        </script>
</html>
