@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<section>
    <div class="container">

        <div class="row">

            <!-- FORM -->
            <div class="col-md-9">

                <h3>Заполните данные контактной формы</h3>


                <!--
                    MESSAGES

                        How it works?
                        The form data is posted to php/contact.php where the fields are verified!
                        php.contact.php will redirect back here and will add a hash to the end of the URL:
                            #alert_success 		= email sent
                            #alert_failed		= email not sent - internal server error (404 error or SMTP problem)
                            #alert_mandatory	= email not sent - required fields empty
                            Hashes are handled by assets/js/contact.js

                        Form data: required to be an array. Example:
                            contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
                            Also, add `required` to input fields if is a mandatory field.
                            Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

                        PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
                                     ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

                        WARNING! Do not change the `email` and `name`!
                                    contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
                                    contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
                -->

                <!-- Alert Success -->
                <div id="alert_success" class="alert alert-success mb-30">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Thank You!</strong> Your message successfully sent!
                </div><!-- /Alert Success -->


                <!-- Alert Failed -->
                <div id="alert_failed" class="alert alert-danger mb-30">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>[SMTP] Error!</strong> Internal server error!
                </div><!-- /Alert Failed -->


                <!-- Alert Mandatory -->
                <div id="alert_mandatory" class="alert alert-danger mb-30">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Sorry!</strong> You need to complete all mandatory (*) fields!
                </div><!-- /Alert Mandatory -->


                <form method="POST" action="{{route('message_create')}}">
                    <fieldset>
                        <input type="hidden"  value="contact_send" />

                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact:name">Имя контакта *</label>
                                <input required type="text" value="" class="form-control" name="name" id="contact:name">
                            </div>
                            <div class="col-md-4">
                                <label for="contact:email">Контактный E-mail</label>
                                <input type="email" value="" class="form-control" name="e-mail" id="contact:email">
                            </div>
                            <div class="col-md-4">
                                <label for="contact:phone">Телефон *</label>
                                <input type="text" value="" class="form-control" name="phone" id="contact:phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="contact:subject">Производитель автомобиля *</label>
                                <input required type="text" value="" class="form-control" name="carmaker" id="contact:subject">
                            </div>
                            <div class="col-md-4">
                                <label for="contact:subject">Модель автомобиля *</label>
                                <input required type="text" value="" class="form-control" name="motor" id="contact:subject">
                            </div>
                        </div>
                        <div class="clearfix">
                            <label for="contact:message">Message *</label>
                            <textarea required maxlength="10000" rows="8" class="form-control" name="comment" id="contact:message"></textarea>
                        </div>


                    </fieldset>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Отправить заявку</button>
                        </div>
                    </div>
                </form>



            </div>
            <!-- /FORM -->


            <!-- INFO -->
            <div class="col-md-3">

                <h2>Наше расположение</h2>

                <p>

                </p>

                <hr />

                <p>
                    <span class="block"><strong><i class="fa fa-map-marker"></i> Адрес:</strong> Костюшко - Григоровича, 29ст2 </span>
                    <span class="block"><strong><i class="fa fa-phone"></i> Телефон:</strong> <a href="tel:1800-555-1234">8-914-460-98-23, 8-914-461-51-19, 8-924-519-92-97</a></span>
                    <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:Avtogas75@mail.ru">Avtogas75@mail.ru</a></span>
                </p>

                <hr />

                <h4 class="font300">Часы работы</h4>
                <p>
                    <span class="block"><strong>Понедельник - Пятница</strong>10:00-18:00 вечера</span>
                    <span class="block"><strong>Суббота:</strong>10:00-14:00</span>
                    <span class="block"><strong>Воскресень:</strong> Выходной</span>
                </p>

            </div>
            <!-- /INFO -->

        </div>

    </div>
</section>
<!-- / -->

@endsection
