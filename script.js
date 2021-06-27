var eng1 = document.getElementById("eng1");
var eng2 = document.getElementById("eng2");
var eng3 = document.getElementById("eng3");
var eng4 = document.getElementById("eng4");
var eng5 = document.getElementById("eng5");
var eng6 = document.getElementById("eng6");

var rangeValue = function () {
    var newValue1 = eng1.value;
    var target1 = document.querySelector('.value1');
    target1.innerHTML = newValue1;

    var newValue2 = eng2.value;
    var target2 = document.querySelector('.value2');
    target2.innerHTML = newValue2;

    var newValue3 = eng3.value;
    var target3 = document.querySelector('.value3');
    target3.innerHTML = newValue3;

    var newValue4 = eng4.value;
    var target4 = document.querySelector('.value4');
    target4.innerHTML = newValue4;

    var newValue5 = eng5.value;
    var target5 = document.querySelector('.value5');
    target5.innerHTML = newValue5;

    var newValue6 = eng6.value;
    var target6 = document.querySelector('.value6');
    target6.innerHTML = newValue6;
}

eng1.addEventListener("input", rangeValue);
eng2.addEventListener("input", rangeValue);
eng3.addEventListener("input", rangeValue);
eng4.addEventListener("input", rangeValue);
eng5.addEventListener("input", rangeValue);
eng6.addEventListener("input", rangeValue);