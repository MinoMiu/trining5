<?php
include('header.php');
?>

<main>
<div class="container">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./image/slide_1.jpg"></div>
            <div class="swiper-slide"><img src="./image/slide_2.jpg"></div>
            <div class="swiper-slide"><img src="./image/slide_3.jpg"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
        <img class="swiper-button-prev" src="./image/slide-btn-prev.jpg"></div>
        <div class="swiper-button-next">
        <img class="swiper-button-next" src="./image/slide-btn-next.jpg"></div>
    </div>
</div>

<div class="text_content" >今年も始まる<span>夏祭り</span></div>

<div class="schedule_title" id="schedule">
    <p>スケジュール</p>
</div>
<div class="schedule" >
    <div class="schedule_1 active ">9月1日</div>
    <div class="schedule_1">9月2日</div>
    <div class="schedule_1">9月3日</div>
</div>
<div class="schedule_content" >
    <div class="content current "><p>9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容</p></div>
    <div class="content"><p>9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容</p></div>
    <div class="content"><p>9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容</p></div>
</div>

<div class="map" id="access">アクセス</div>
<div class="adress">〒771-1154 徳島県徳島市応神町東貞方南川淵</div>

<div style="text-align:center;"  class="p_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17229.39540348641!2d134.51490905605274!3d34.105931180243566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355373ed759c66e3%3A0x105b8dc379d7b0b1!2z5ZCJ6YeO5bed5YyX5bK46YGL5YuV5bqD5aC044K944OV44OI44Oc44O844Or5aC0Q-mdog!5e0!3m2!1sja!2sjp!4v1711289454092!5m2!1sja!2sjp" 
    max-width="700"
    width="100%"
    height="450" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

<form action="confirm.php" method="post"　class="reserve" id="reserve">
    <h1>席予約</h1>
    <div class="input-area">
		<p>お名前<span>*必須</span></p>
		<input type="text" name="name" placeholder="例)田中　太郎" required>
	</div>
    <div class="input-area">
		<p>席の場所<span>*必須</span></p>
		<select name="pref" required>
		 		<option value="">---</option>
		 		<option value="SS">SS席</option>
		 		<option value="S">S席</option>
		 		<option value="A">A席</option>
                <option value="B">B席</option>
                <option value="C">C席</option>
		 	</select>
	</div>
    <div class="input-area">
		<p>メールアドレス<span>*必須</span></p>
		<input type="email" name="email" placeholder="例)abcd123@example.com" required>
	</div>
    <div class="input-area">
		<p>電話番号<span class="span2">*任意</span></p>
		 	<input type="tel" name="phone" placeholder="例)09012345678">
	</div>
    <div class="input-area">
	 	<input type="submit" name="submit" value="送信" class="btn-border" id="js-submit" disabled>
	</div>

</form>

</main>
<?php
include('footer.php');
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="./index.js"></script>

</body>
</html>