var score = 1;
var auto = 0;
function autoBtn() {
  auto++;
  console.log(auto);
}
function clickBtn() {
  score++;
  console.log(score);
  document.getElementsByTagName("p")[0].firstChild.data = "Кликов: " + score;
}
function auto() {
  score++;
  console.log(score);
  document.getElementsByTagName("p")[0].firstChild.data = "Кликов: " + score;
}



if (score == '1'){
setInterval(auto(),1000);
}