function namecheck(champ)
{
    var regex = /^[a-zàâçéèêëîïôûùüÿñæœ' -]+$/i;
    if(!regex.test(champ.value))
    {
        console.log("coucou");
        surligne(champ, false);
        return false;
    }
    else
    {
        var request = new XMLHttpRequest();
        request.open('POST', '../model/disponibility.php', true);
        request.onreadystatechange = function()
        {
            if (this.readyState == 4)
            {
                if (this.responseText == "ok")
                {
                    console.log(this.responseText);
                    document.getElementById("name_error").setAttribute("hidden", "hidden");
                    surligne(champ, true);
                }
                else
                {
                    console.log(this.responseText);
                    document.getElementById("name_error").removeAttribute("hidden");
                    surligne(champ, false);
                }
            }

        };
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send("name=" + champ.value);
        request = null;
    }
}

function surligne(champ, erreur)
{
    if(erreur == false) {
        champ.style.borderColor = "#FF0000";
    }
    else {
        champ.style.borderColor = "#02BB06";
    }
}

function dropcheck(champ)
{
    champ.style.backgroundColor= null;
}

function selectcheck(champ)
{
    if (champ.value == "Type de plat" || champ.value == "Difficulté" || champ.value == "Coût" || champ.value == "Type de cuisson")
    {
        surligne(champ, false);
        return false;
    }
    else
    {
        surligne(champ, true);
        return true;
    }
}

function prep_set_min()
{
    var min = document.getElementById("pm");
    var hour = document.getElementById("ph");
    if (min.value == "" && hour.value != "")
    {
        min.value = 0;
    }
    if (min.value != "")
        surligne(min, true);
    else
        surligne(min, false);
    if (hour.value != "")
        surligne(hour, true);
    else
        surligne(hour, false);
}

function prepmin_check()
{
    var min = document.getElementById("pm");
    var hour = document.getElementById("ph");
    if (min.value == "")
    {
        return;
    }
    var min_int = parseInt(min.value);
    if (min_int >= 60)
    {
        var count = min_int / 60;
        var hour = document.getElementById("ph");
        if (hour.value == "")
        {
            var hour_int = 0;
        }
        else
        {
            var hour_int = parseInt(hour.value);
        }
        while (count >= 1)
        {
            hour_int += 1;
            min_int -= 60;
            document.getElementById("ph").value = hour_int.toString();
            document.getElementById("pm").value = min_int.toString();
            count--;
        }
    }
    if (min.value != "")
        surligne(min, true);
    else
        surligne(min, false);
    if (hour.value == "")
    {
        hour.value = 0;
        surligne(hour, true);
    }
}

function cuis_set_min()
{
    var min = document.getElementById("cm");
    var hour = document.getElementById("ch");
    if (min.value == "" && hour.value != "")
    {
        min.value = 0;
    }
    if (min.value != "")
        surligne(min, true);
    else
        surligne(min, false);
    if (hour.value != "")
        surligne(hour, true);
    else
        surligne(hour, false);
}


function cuismin_check()
{
    var min = document.getElementById("cm");
    var hour = document.getElementById("ch");
    if (min.value == "")
    {
        return;
    }
    var min_int = parseInt(min.value);
    if (min_int >= 60)
    {
        var count = min_int / 60;
        var hour = document.getElementById("ch");
        if (hour.value == "")
        {
            var hour_int = 0;
        }
        else
        {
            var hour_int = parseInt(hour.value);
        }
        while (count >= 1)
        {
            hour_int += 1;
            min_int -= 60;
            document.getElementById("ch").value = hour_int.toString();
            document.getElementById("cm").value = min_int.toString();
            count--;
        }
    }
    if (min.value != "")
        surligne(min, true);
    else
        surligne(min, false);
    if (hour.value == "")
    {
        hour.value = 0;
        surligne(hour, true);
    }
}

function isempty(champ)
{
    if (champ.value == "")
        surligne(champ, false);
    else
        surligne(champ, true);
}

function blank_check(champ)
{
    var qty = champ.previousElementSibling.previousElementSibling;
    if (champ.value == "")
    {
        surligne(champ, false);
    }
    else
        surligne(champ, true);
    if (qty.value == "")
    {
        surligne(qty, false);
    }

}

function add_reagent()
{
    var tmp = document.getElementById("reagents");
    var div = document.createElement('p');
    div.innerHTML = ('<input name="quantity" class="test" placeholder="Quantité" type="text" onblur="isempty(this)"/><label>de</label><input name="reagent" placeholder="Ingrédient" type="text" onblur="blank_check(this)"/> <button type="button" class="btn btn-danger" onclick="delete_reagent(this)">Supprimer</button>');
    tmp.appendChild(div);
}

var step_num = 1;

function delete_reagent(target)
{
    var bool = false;
    if (target.name == "rm_step")
    {
        bool = true;
    }
    var rm = target.parentNode;
    rm.remove();
    if (bool == true)
    {
        step_num = step_num - 1;
        reset_steps();
    }
}

function add_step()
{
    var tmp = document.getElementById("steps");
    var div = document.createElement('p');
    div.setAttribute("name", "step");
    step_num += 1;
    div.innerHTML = ('<label>Etape ' + step_num + ':  </label><textarea name="step" class="getstep" placeholder="Décrivez votre étape" type ="text" rows="3" cols="50" onblur="isempty(this)"></textarea><button type="button" class="btn btn-danger" name="rm_step" onclick="delete_reagent(this)">Supprimer</button>');
    tmp.appendChild(div);
}

function reset_steps()
{
    var i = 0;
    var child = null;
    var container = document.getElementById("steps");
    var nb = container.childElementCount;
    while (i < nb)
    {
        child = container.children[i];
        child.firstChild.innerHTML = "Etape " + (i + 1) + ": ";
        i++;
    }
}

function check_user(champ)
{
    var regex = /^.{4,15}$/
    if(!regex.test(champ.value))
    {
        surligne(champ, false);
        return false;
    }
    else
    {
        surligne(champ, true);
        return true;
    }
}

function check_mail(champ)
{
    var regex = /^.{2,15}@.{2,15}\..{2,5}/;
    if(!regex.test(champ.value))
    {
        surligne(champ, false);
        return false;
    }
    else
    {
        surligne(champ, true);
        return true;
    }
}

function check_file(form)
{
    var bool = true;
    var text = form;
    var file = form.value;
    var extensions = ["jpg", "jpeg", "png"];
    var elem = file.split(".");
    var i = elem.length - 1;
    if (elem[i] != extensions[0] && elem[i] != extensions[1] && elem[i] != extensions[2])
    {
        document.getElementById("format_error").removeAttribute("hidden");
        bool = false;
    }
    else
    {
        document.getElementById("format_error").setAttribute("hidden", "hidden");
    }
    if (form.files[0].size > 1048576)
    {
        document.getElementById("size_error").removeAttribute("hidden");
        bool = false;
    }
    else
    {
        document.getElementById("size_error").setAttribute("hidden", "hidden");
    }
    if (bool == false)
        surligne(text, false);
    else
        surligne(text, true);

}

function check_form(form)
{
    if (form_check_name() == false)
        return false;
    if (form_check_img() == false)
        return false;
    if (form_check_typeplat() == false)
        return false;
    if (form_check_difficulty() == false)
        return false;
    if (form_check_cost() == false)
        return false;
    if (form_check_preptime() == false)
        return false;
    if (form_check_cuistime() == false)
        return false;
    if (form_check_typecuis() == false)
        return false;
    if (form_check_reagents() == false)
        return false;
    if (form_check_steps() == false)
        return false;
    if (form_check_pseudo() == false)
        return false;
    if (form_check_mail() == false)
        return false;

    formtoobj();

    return false;
}

function form_check_name()
{
    var regex = /^[a-zàâçéèêëîïôûùüÿñæœ' -]+$/i;
    var input = document.querySelector('input[name="recipe_name"]');
    if(!regex.test(input.value) || input.value == null)
        return false;
}

function form_check_img()
{
    var file = document.querySelector('input[name="meal_pic"]');
    var extensions = ["jpg", "jpeg", "png"];
    if (file.value == null)
    {
        return false;
    }
    else
    {
        var elem = file.value.split(".");
        var i = elem.length - 1;
        if (elem[i] != extensions[0] && elem[i] != extensions[1] && elem[i] != extensions[2])
        {
            return false;
        }
        if (file.files[0].size > 1048576)
        {
            return false;
        }
        return true;
    }
}

function form_check_typeplat()
{
    var file = document.querySelector('select[name="type"]');
    var type_plat = ["Entrée", "Plat Principal", "Dessert", "Boisson"];
    if (file.value != type_plat[0] && file.value != type_plat[1] && file.value != type_plat[2] && file.value != type_plat[3])
    {
        return false;
    }
    return true;
}

function form_check_difficulty()
{
    var file = document.querySelector('select[name="difficulty"]');
    var dfficulty = ["Très Facile", "Facile", "Intermédiaire", "Délicat", "Difficile"];
    if (file.value != dfficulty[0] && file.value != dfficulty[1] && file.value != dfficulty[2] && file.value != dfficulty[3] && file.value != dfficulty[4])
    {
        alert(file.value);
        return false;
    }
    return true;
}

function form_check_cost()
{
    var file = document.querySelector('select[name="cost"]');
    var cost = ["Bon Marché", "Moyen", "Assez Cher"];
    if (file.value != cost[0] && file.value != cost[1] && file.value != cost[2])
    {
        return false;
    }
    return true;
}

function form_check_preptime()
{
    var hour = document.querySelector('input[name="prepa_h"]');
    var min = document.querySelector('input[name="prepa_m"]');
    if (hour.value == 0 && min.value == 0)
        return false;
    if (hour == "")
        hour = 0;
    if (min == "")
        min = 0;
}

function form_check_cuistime()
{
    var hour = document.querySelector('input[name="cuisson_h"]');
    var min = document.querySelector('input[name="cuisson_m"]');
    if (hour == 0 && min == 0)
        return false;
    if (hour == "")
        hour = 0;
    if (min == "")
        min = 0;
}

function form_check_typecuis()
{
    var file = document.querySelector('select[name="type_cuisson"]');
    var type_cuisson = ["Four", "Plaques", "Sans cuisson", "Autre"];
    if (file.value != type_cuisson[0] && file.value != type_cuisson[1] && file.value != type_cuisson[2] && file.value != type_cuisson[3])
{
        alert("lol");
        return false;
    }
}

function form_check_reagents()
{
    var qty = document.querySelectorAll('input[name="quantity[]"]');
    var type = document.querySelectorAll('input[name="reagent[]"]');
    var i = 1;
    if (qty[0] == "" || type[0] == "")
        return false;
    while (qty[i] != null && type[i] != null)
    {
        if (qty[i] == "" || type[i] == "")
            return false;
        i++;
    }
}

function form_check_steps()
{
    var step = document.querySelectorAll('input[name="step[]"]');
    var i = 1;
    if (step[0] == "")
        return false;
    while (step[i] != null)
    {
        if (step[i] == "")
            return false;
        i++;
    }
}

function form_check_pseudo()
{
    var pseudo = document.querySelector('input[name="user"]');
    var regex = /^.{4,15}$/;
    if(!regex.test(pseudo.value))
        return false;
}

function form_check_mail()
{
    var mail = document.querySelector('input[name="user_mail"]');
    var regex = /^.{2,15}@.{2,15}\..{2,5}/;
    if(!regex.test(mail.value))
        return false;
}

function function_test()
{
    var img = document.querySelector('input[type=file]').files[0];
    alert(img);
    var reader = new FileReader();
    reader.readAsDataURL(img);
    reader.onloadend = function(e)
    {
        var img_data = e.target.result;
        alert(img_data);
    }
}

function formtoobj()
{
    var obj = [];

    var name = document.querySelector('input[name="recipe_name"]').value;
    obj["recipe_name"] = name;

    var img = document.querySelector('input[type=file]').files[0];
    var reader = new FileReader();
    reader.readAsDataURL(img);
    reader.onloadend = function(e)
    {
        var img_data = e.target.result;
        //console.log(img_data);
        obj["img"] = img_data;

        var type = document.querySelector('select[name="type"]').value;
        obj["type"] = type;

        var difficulty = document.querySelector('select[name="difficulty"]').value;
        obj["difficulty"] = difficulty;

        var cost = document.querySelector('select[name="cost"]').value;
        obj["cost"] = cost;

        var p_hour = parseInt(document.querySelector('input[name="prepa_h"]').value);
        var p_min = parseInt(document.querySelector('input[name="prepa_m"]').value);
        var p_time = p_hour * 60 + p_min;
        obj["p_time"] = p_time;

        var c_hour = parseInt(document.querySelector('input[name="Cuisson_h"]').value);
        var c_min = parseInt(document.querySelector('input[name="Cuisson_m"]').value);
        var c_time = c_hour * 60 + c_min;
        obj["c_time"] = c_time;

        var type_cuisson = document.querySelector('select[name="type_cuisson"]').value;
        obj["type_cuisson"] = type_cuisson;

        var user = document.querySelector('input[name="user"]').value;
        obj["user"] = user;

        var user_mail = document.querySelector('input[name="user_mail"]').value;
        obj["user_mail"] = user_mail;

        var quantity_ph = new Array();
        var quantity = new Array();
        quantity_ph = document.getElementsByName('quantity');
        for (var i = 0; quantity_ph[i] != undefined; i++)
        {
            quantity["quantity[" + i + "]"] = (quantity_ph[i].value);
        }
        obj["quantities"] = quantity;
        //console.log(quantity);

        var reagent_ph = new Array();
        var reagent = new Array();
        reagent_ph = document.getElementsByName('reagent');
        for (var i = 0; reagent_ph[i] != undefined; i++)
        {
            reagent["reagent[" + i + "]"] = (reagent_ph[i].value);
        }
        obj["reagents"] = reagent;
        //console.log(reagent);

        var stept_ph = new Array();
        var step = new Array();
        step_ph = document.getElementsByClassName('getstep');
        for (var i = 0; step_ph[i] != undefined; i++)
        {
            step["step[" + i + "]"] = (step_ph[i].value);
        }
        obj["steps"] = step;
        //console.log(step);

        var jason = JSON.stringify(convArrToObj(obj));
        //console.log(jason);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function()
        {
            console.log(this.readyState);
            if(this.readyState == 4)
            {
                if(this.responseText != "error")
                {
                    console.log(this.responseText);
                    window.location.href = "http://localhost/marmiton_mvc/Marmithon%20-%20Copie/marmithon/controler/php/details_controller.php?id=" + this.responseText;
                }
                else
                {
                    console.log(this.responseText);
                }
            }
        };
        request.open('POST', 'http://localhost/marmiton_mvc/Marmithon%20-%20Copie/marmithon/controler/php/form_controller.php', true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send("content=" + jason);
        request = null;
    }

}

var convArrToObj = function(array){
    var thisEleObj = new Object();
    if(typeof array == "object"){
        for(var i in array){
            var thisEle = convArrToObj(array[i]);
            thisEleObj[i] = thisEle;
        }
    }else {
        thisEleObj = array;
    }
    return thisEleObj;
}