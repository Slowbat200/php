const NotificationBtn = document.querySelector(".btn_edit")
const requestPermission = function(){
    if(!("Notification" in window))
    throw new Error("Not support")

    Notification.requestPermission().then((permissions)=>{
        const notification = new Notification("test", {
            body: "Test notification",
        })
    })
}

NotificationBtn.addEventListener("click", requestPermission)