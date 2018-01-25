<?php include '../includes/header.php';?>
<?php include '../core/Database.php';?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 singupPage" id="page">
				<div class="row">
					<div class="col-sm-6 form">
						<form method="POST" action="signup/os.php">
							 <h3><i class="fas fa-user"></i> عضویت برای استاد جدید</h3>
							 <div class="form-frame">
							 	<span>نام و نام خوانوادگی :</span><br>
							 	<input type="text" name="fname"><br><br>
							 	<span>شماره پرسنلی :</span><br>
							 	<input type="number" name="personalcode"><br><br>
							 	<input type="submit" name="submit" value="ورود">
							 </div>

						</form>
					</div>

					<div class="col-sm-6 form-dis" id="page">
							<img src="ass/img/teacher.png" style="margin-top:50px;">
						<p>
							لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include '../includes/footer.php'; ?>
