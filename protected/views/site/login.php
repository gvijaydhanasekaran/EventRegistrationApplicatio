<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>                        
        <fieldset>
            <div class="form-group">
                <?php echo $form->textField($model,'username', array('class'=>'form-control','maxlength'=>255)); ?>
                <div class="help-block error"><?php echo $form->error($model,'username'); ?></div>
            </div>
            <div class="form-group">
            	<?php echo $form->passwordField($model,'password', array('class'=>'form-control','maxlength'=>255)); ?>
				<div class="help-block error"><?php echo $form->error($model,'password'); ?></div>
            </div>
            <div class="checkbox">
                <label>
                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                </label>
            </div>
            <!-- Change this to a button or input when using this as a form -->
            <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
        </fieldset>
<?php $this->endWidget(); ?>          
