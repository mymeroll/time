<?php
//平出　新（ひらで　あらた）
//ある時刻の入力
print "ある時刻(0時～23時)を半角数字のみで入力してください";
$time = trim(fgets(STDIN));
while(true){
	if(is_numeric($time) && $time >= 0 && $time <= 23){
		break;
	}else{
		print "ある時刻(0時～23時)を半角数字のみで入力してください";
		$time = trim(fgets(STDIN));
	}
}
//開始時刻の入力
print "時間の範囲(0時～23時)の開始時刻を半角数字のみで入力してください";
$starttime = trim(fgets(STDIN));
while(true){
	if(is_numeric($starttime) && $starttime >= 0 && $starttime <= 23){
		break;
	}else{
		print "時間の範囲(0時～23時)の開始時刻を半角数字のみで入力してください";
		$starttime = trim(fgets(STDIN));
	}
}
//終了時刻の入力
print "時間の範囲(0時～23時)の終了時刻を半角数字のみで入力してください";
$endtime = trim(fgets(STDIN));
while(true){
	if(is_numeric($endtime) && $endtime >= 0 && $endtime <= 23){
		break;
	}else{
		print "時間の範囲(0時～23時)の終了時刻を半角数字のみで入力してください";
		$endtime = trim(fgets(STDIN));
	}
}
//ある時刻(0時～23時)が、指定した時間の範囲内に含まれる場合
if($time >= $starttime && $time < $endtime){
	print "ある時刻(0時～23時)が、指定した時間の範囲内に含まれています";
}
//ある時刻(0時～23時)が、指定した時間の範囲内に含まれる場合（開始時間と終了時間が同じ場合）
elseif($starttime == $endtime && $starttime == $time){
	print "ある時刻(0時～23時)が、指定した時間の範囲内に含まれています";
}
//ある時刻(0時～23時)が、指定した時間の範囲内に含まれる場合（日を跨ぐ場合）
elseif($starttime > $endtime && $time >= $starttime && $time <= 23 || $starttime > $endtime && $time >= 0 && $time <= $endtime){
		print "ある時刻(0時～23時)が、指定した時間の範囲内に含まれています";
}
//ある時刻(0時～23時)が、指定した時間の範囲内に含まれない場合
else{
	print "ある時刻(0時～23時)が、指定した時間の範囲内に含まれていません";
}
?>