var j = 0;

function begin(button)
{
    var divs = document.querySelectorAll('.step');
    button.setAttribute('style', 'display:none;');
    divs[j].removeAttribute('style');
    j++;
}

function display_next()
{
    var divs = document.querySelectorAll('.step');
    divs[j - 1].setAttribute('style', 'display:none;');
    divs[j].children[0].innerHTML = "Etape " + (j + 1) + ":";
    divs[j].removeAttribute('style');
    j++;
}

function finish()
{
    var divs = document.querySelectorAll('.step');
    var finish = document.querySelector('.finish');
    console.log(finish);
    divs[j - 1].setAttribute('style', 'display:none;');
    finish.removeAttribute('hidden');
}

function rate(rating, current)
{
    var id = document.querySelector('input[name="id"]').value;

    var obj = {};
    obj.rating = rating;
    obj.id = id;

    var jason = JSON.stringify(obj);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function ()
    {
        if (this.readyState == 4)
        {
            if (this.responseText != "not ok")
            {
                var new_mark = this.responseText;
                var stars = document.querySelectorAll(".stars");
                var success = document.querySelector('#rating_success');
                success.removeAttribute('hidden');
                to_normal(new_mark);
                stars.forEach(
                    function remove_interaction(v)
                    {
                        v.removeAttribute('onclick');
                        v.removeAttribute('onmouseover');
                        v.removeAttribute('onmouseleave');
                    }
                );
            }
            else
            {
                console.log(this.responseText);
            }
        }
    };
    request.open('GET', '../../model/rate.php?content=' + jason, true);
    request.setRequestHeader("Content-type", "application/x- www-form-urlencoded");
    request.send();
    request = null;
}

function calibrate(number)
{
    var stars = document.querySelectorAll(".stars");

    for (i= 1; i < 5; i++)
    {
        if (i < number)
            stars[i].setAttribute('src', '../../view/images/rating/star_ok.svg');
        else
            stars[i].setAttribute('src', '../../view/images/rating/star_empty.svg');
    }
}

function to_normal(rating)
{
    var stars = document.querySelectorAll(".stars");

    for (i= 0; i < 5; i++)
    {
        if (i <= rating - 1)
            stars[i].setAttribute('src', '../../view/images/rating/star_ok.svg');
        else
            stars[i].setAttribute('src', '../../view/images/rating/star_empty.svg');
    }
}
