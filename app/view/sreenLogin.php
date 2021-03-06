{% extends "themeBase.php" %}

{% block title %}Login{% endblock %}

{% block bory %}
<main class="container-login">

        <div class="lg-form">
            <img class='image_ufam' src='images/logo_ufam.jpg'/>
            <h1>Welcome!!!</h1>
        </div>

        <form class='form_lg' action='homescreen' method='post' autocomplete="off">                                
                <div class="input-field">
                    <input type='text' name='user_name' placeholder='your user name ...'/>
                    <div class="lined"></div>
                </div>
                <div class="input-field">
                    <input type='password' id='user_password' name='password_user' placeholder='your password ...'/>
                    <div class="lined"></div>
                </div>
                <div class="input-field">
                    <input id='chk_see_pass' onclick='show_password()' name='chk_see_pass' type='checkbox'>
                    <label for='chk_see_pass'>Show password</label>
                </div>
                <input type='submit' name='button_submit' value='Send'/>
        </form>
</main> 
{% endblock %}

{% block js %}
<script>
    function show_password(){
        var field_type = document.getElementById('user_password');
        if(field_type.type == "password"){
            field_type.type = 'text';
        }else{
            field_type.type = 'password';
        }
    }
</script>
{% endblock %}