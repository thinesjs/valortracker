var uuid = document.getElementById("playerTitleUUID").value;

$.ajax({
    url: "https://valorant-api.com/v1/playertitles/" + uuid,
    type: 'GET',
    dataType: 'json', // added data type
    success: function(res) {
        document.getElementById("playerTitle1").innerHTML = res.data.displayName;
    }
});

// skin chooser loader
let currentWeapon = "";

$(document).ready(function(){
    $('.inventoryCell').click(function(){
        document.getElementById("weaponDisplayName").innerHTML = $(this).attr("id").toUpperCase();
        document.getElementById("skinPreview").setAttribute("src", document.getElementById($(this).attr("id")).firstElementChild.firstElementChild.getAttribute("src"))

        if ($('#currentSkinId').length > 0) {
            document.getElementById("currentSkinId").remove();
        }

        let nform = document.createElement("input")
        nform.setAttribute("id", "currentSkinId")
        nform.setAttribute("value", $(this).attr("currentuuid"))
        nform.setAttribute("type", "hidden")
        nform.setAttribute("name", "currentSkinId")
        //
        document.getElementById("skinSelector").appendChild(nform)

        skinLoader($(this).attr("weaponId"));
    });

    const skinLoader = async (weapon) => {
        try{
            const url = 'https://valorant-api.com/v1/weapons'
            const res = await fetch(url);
            const data = await res.json();

            document.getElementById("skinChooser").innerHTML = ""
            document.getElementById("skinChooser").scrollTo(0,0)

            for (let i=0; i<data["data"][weapon]["skins"].length; i++) {
                if (data["data"][weapon]["skins"][i]["displayName"] !== "Random Favorite Skin") {
                    let card = document.createElement("div")
                    card.setAttribute("class", "card mx-1 text-center fade show alert p-0 card-hover mb-4 mt-2 skin-Item")
                    card.setAttribute("uuid", data["data"][weapon]["skins"][i]["chromas"][0]["uuid"])
                    let cardBody = document.createElement("div")
                    cardBody.setAttribute("class", "p-2 d-block mt-4")
                    card.appendChild(cardBody)
                    let skinImg = document.createElement("img")
                    let skinItemName = document.createElement("p")
                    currentWeapon = data["data"][weapon]["displayName"].toLowerCase()
                    cardBody.appendChild(skinImg)
                    cardBody.appendChild(skinItemName)
                    document.getElementById("skinChooser").appendChild(card)
                    skinImg.setAttribute("src", data["data"][weapon]["skins"][i]["chromas"][0]["fullRender"])
                    skinImg.setAttribute("class", "img-responsive")
                    skinImg.setAttribute("height", "70")
                    skinItemName.setAttribute("class", "mt-3")
                    skinItemName.innerHTML = data["data"][weapon]["skins"][i]["displayName"]
                }

            }




        }catch (e) {
            console.log(e);
        }

    }






});

// end skin chooser loader

// search

$(document).ready(function(){
    $('#searchSkin').keyup(function(){

        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById('searchSkin');
        filter = input.value.toUpperCase();
        //ul = document.getElementById("skinChooser");
        li = document.getElementsByClassName('skin-Item');

        for (i = 0; i < li.length; i++) {
            a = li[i].children[0].getElementsByTagName("p")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    });
});

// end search

// skin chooser

$(document).ready(function(){
    $("#skinChooser").on("click", ".skin-Item",function(){
        //alert($(this).attr("uuid"));
        document.getElementById("skinPreview").setAttribute("src", this.firstElementChild.firstElementChild.getAttribute("src"))

        if ($('#newSkinId').length > 0) {
            document.getElementById("newSkinId").remove();
        }

        let form = document.createElement("input")
        form.setAttribute("id", "newSkinId")
        form.setAttribute("value", $(this).attr("uuid"))
        form.setAttribute("type", "hidden")
        form.setAttribute("name", "newSkinId")
        //
        document.getElementById("skinChooser").appendChild(form)

    });
});








