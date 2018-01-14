
	<div class="large-5 columns">_</div>

	<div class="quizzes form large-2 columns content">	
	
	<div class="panel">
      <h5>Login</h5>
      <p>Login here</p>
    </div>
	
	<?php		
			echo $this->Form->create();
			echo $this->Form->input('username',['label'=>'Enter Username']);
			echo $this->Form->input('password');
			echo $this->Form->button('Login',['class'=>'button']);
			echo $this->Form->end();			
	?>
	</div>


	<div class="large-5 columns" >
	

	
	</div>
	

