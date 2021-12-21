                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>


<script type="text/javascript">
      function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            var blah = $('#blah');
            blah.attr('src', e.target.result).width(350).height(200);
            blah.switchClass("imge","imgf");
            };
            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
</body>
</html>