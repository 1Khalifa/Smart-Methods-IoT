let lang = "English"
let en = null;
if (lang === "English") {

    en = window.watsonAssistantChatOptions = {
        integrationID: "46ea18cb-13f7-45bf-b5f4-61dfe548579c", // The ID of this integration.
        region: "eu-gb", // The region your integration is hosted in.
        serviceInstanceID: "47e2608d-3af4-4977-af92-c37729e13315", // The ID of your service instance.
        onLoad: function (instance) {
            instance.render();
        }
    };

    setTimeout(function () {
        const t = document.createElement('script');
        t.setAttribute("id", "eng");
        t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
        document.head.appendChild(t);
    });
}

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

document.addEventListener('DOMContentLoaded', function () {

    let checkbox = document.querySelector('input[type="checkbox"]');

    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            lang = "Arabic"
            movementTab.innerHTML = " اتجاه حركة الروبوت  <img class=\"directions ms-1\" src=\"images/controller.svg\">";
            movementTab.classList.add("arabic");
            armTab.innerHTML = " ذراع الروبوت  <img class=\"robot-arm ms-1\" src=\"images/robot-arm.svg\">";
            armTab.classList.add("arabic");
            document.querySelector(".msg").innerHTML = "<h4 class=\"text-light text-end p-4\">،مرحبا<br> هل يمكنك مساعدتي على الحركة؟</h4>";
            document.querySelector(".msg").classList.add("arabic");
        } else {
            movementTab.innerHTML = "Robot Movement <img class=\"directions\" src=\"images/controller.svg\">";
            movementTab.classList.remove("arabic");
            armTab.innerHTML = " ذراع الروبوت  <img class=\"robot-arm ms-1\" src=\"images/robot-arm.svg\">";
            armTab.classList.remove("arabic");
            document.querySelector(".msg").innerHTML = "<h3 class=\"text-light p-4\">Hello,<br> can you help me move?</h3>";
            document.querySelector(".msg").classList.remove("arabic");

        }
    });
});