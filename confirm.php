<?php
include('header.php');
?>

<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

//各項目を内容を取得
$name = $_POST['name'];
$pref = $_POST['pref'];
$email = $_POST['email'];
$tel = $_POST['tel'];


?>

<main>
<form action="complete.php" method="post">
	<h2>お問い合わせ内容確認</h2>
    <table>
		<tr><th class="input-area_confirm">
		<label>お名前</label></th>
		<td><?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?></td>
		</tr>
		<tr><th class="input-area_confirm">
		<label>希望席</label></th>
		<td><?php echo htmlspecialchars($pref,ENT_QUOTES,'UTF-8');?></td>
		</tr>
		<tr><th class="input-area_confirm">
		<label>メールアドレス</label></th>
		<td><?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?></td>
		</tr>
		<tr><th class="input-area_confirm">
		<label>電話番号</label></th>
		<td><?php echo htmlspecialchars($tel,ENT_QUOTES,'UTF-8');?></td>
		</tr>
	</table>
    <div class="input-area_confirm">
	 		<input type='button' onclick='history.back()' value='戻る' class="btn-border_1">
	 		<input type="submit" name="submit" value="送信" class="btn-border_1">
	 		<input type="hidden" name="name" value="<?php echo $name;?>">
            <input type="hidden" name="pref" value="<?php echo $pref;?>">
	 		<input type="hidden" name="email" value="<?php echo $email;?>">
	 		<input type="hidden" name="tel" value="<?php echo $tel;?>">

	 	</div>

</form>
</main>

<?php
include('footer.php');
?>
</body>
</html>