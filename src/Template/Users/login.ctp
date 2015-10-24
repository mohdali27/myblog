<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?= $this->Form->create() ?>
                            <fieldset>
								<?=
									$this->Form->input('email', ['type' => 'email','autofocus','placeholder'=>"E-mail",'required'=>'required','label'=>false,'class'=>'form-control','templates' => ['inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>' ],
									]);
								?>
								
								<?=
									$this->Form->input('password', ['type' => 'password','placeholder'=>"Password",'required'=>'required','label'=>false,'class'=>'form-control','templates' => ['inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>' ],
									]);
								?>
                                <?=
									$this->Form->input('remember', ['type' => 'checkbox','label'=>'Remember Me','value'=>'Remember Me','templates' => ['inputContainer' => '<div class="checkbox {{type}}{{required}}">{{content}}</div>' ],
									]);
								?>
                                <?=
								   $this->Form->button('Login', ['type' => 'submit','class'=>'btn btn-lg btn-success btn-block']);
								?>
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>