<!-- CONTACT PAGE -->
<section id="content">
    <div class="content-wrap-sml">
        <div class="container clearfix">
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

            $attributes = ['class' => 'row', 'id' => 'contact'];
            echo form_open(base_url('contact'), $attributes);

            $field_data = [
                'name' => 'name',
                'id' => 'name',
                'placeholder' => 'Name & Surname',
                'value' => set_value('name'),
                'class' => 'form-control',
            ];
            echo form_input($field_data);

            $field_data = [
                'name' => 'email',
                'id' => 'email',
                'placeholder' => 'Email Address',
                'value' => set_value('email'),
                'class' => 'form-control',
            ];
            echo form_input($field_data);

            $field_data = [
                'name' => 'message',
                'id' => 'message',
                'cols' => '10',
                'rows' => '6',
                'placeholder' => 'Message',
                'value' => set_value('message'),
                'class' => 'form-control',
            ];
            echo form_textarea($field_data);

            $field_data = [
                'id' => 'send',
                'class' => 'btn btn-custom',
                'value' => 'Submit',
            ];
            echo form_submit($field_data);
            echo form_close();
            ?>
        </div>
    </div>
</section>