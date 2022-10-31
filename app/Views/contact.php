<!-- CONTACT PAGE -->
<section id="content">
    <div class="content-wrap-sml">
        <div class="container clearfix">
            <div class="form-widget">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Contact Us</h1>
                        <p>Use the form below to send your query to us</p>
                        <?php

                        $errors = $validation->getErrors();
                        if (!empty($errors)) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <?php foreach ($errors as $error) { ?>
                                        <li><?= esc($error) ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php
                        }

                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <?php
                        $attributes = ['class' => 'row', 'id' => 'contact'];
                        echo form_open(base_url('contact'), $attributes);

                        $field_data = [
                            'name' => 'name',
                            'id' => 'name',
                            'placeholder' => 'Name & Surname',
                            'value' => set_value('name'),
                            'class' => 'form-control',
                        ];
                        echo '<div class="col-6 form-group">';
                        echo form_input($field_data);
                        echo "</div>";

                        $field_data = [
                            'name' => 'email',
                            'id' => 'email',
                            'placeholder' => 'Email Address',
                            'value' => set_value('email'),
                            'class' => 'form-control',
                        ];
                        echo '<div class="col-12 form-group">';
                        echo form_input($field_data);
                        echo "</div>";

                        $field_data = [
                            'name' => 'message',
                            'id' => 'message',
                            'cols' => '10',
                            'rows' => '6',
                            'placeholder' => 'Message',
                            'value' => set_value('message'),
                            'class' => 'form-control',
                        ];
                        echo '<div class="col-12 form-group">';
                        echo form_textarea($field_data);
                        echo "</div>";

                        echo "<div class='col-12 form-group'>";
                        echo "<div class='g-recaptcha' data-sitekey='6LfdHsoiAAAAACWdAHZDmH4cUGzUzBc1LnNbIApf'></div>";
                        echo "</div>";

                        $field_data = [
                            'id' => 'send',
                            'class' => 'btn btn-secondary',
                            'value' => 'Submit',
                        ];
                        echo '<div class="col-12">';
                        echo form_submit($field_data);
                        echo "</div>";
                        echo form_close();
                        ?>
                    </div>
                    <div class="col-lg-4 ps-lg-4">

                        <address>
                            <strong>Address:</strong><br>
                            Unit 9 Alexway Complex, <br>
                            4 Roman Close, Hermanus<br>
                        </address>
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> <a href="tel:+27828753354">+27 (82) 875 3354</a><br>
                        <abbr title="Fax"><strong>Fax:</strong></abbr> 086 645 0000<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr>
                        <?php
                        $attributes = ['title' => 'Website Contact'];
                        echo safe_mailto(' tightfit@hermanus.co.za', ' tightfit@hermanus.co.za', $attributes);
                        ?>

                        <div class="widget border-0 pt-0">

                            <a href="https://www.facebook.com/tightfitgaragedoors" class="social-icon si-small si-dark si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="https://www.linkedin.com/in/tight-fit-garage-doors-home-automation-hermanus-42b4537b/" class="social-icon si-small si-dark si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>