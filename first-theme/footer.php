<footer>

<div class="inner-footer">
<h2>Tours of the Month</h2>

<?php dynamic_sidebar('sidebar-footer'); ?>
</div>

<div class="inner-footer">
<ul>

<li>Copyright &copy; <?php echo date ('Y'); ?></li>
<li>All Rights Reserved</li>
<li><a href="">Web Design by Fritz</a></li>
<li><a id="html-checker" href="#">HTML Validation</a></li>
                <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>

            <script>
                document.getElementById("html-checker").setAttribute("href", "https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>
</ul>
</div>

</footer>
    <!-- close footer -->
    <script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
    </body>
    </html>