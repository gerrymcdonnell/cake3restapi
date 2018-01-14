<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
		<hr>
		<li><?= $this->Html->link(__('delete selected'), 'javascript:delete_selected()') ?></li>
		
		<li><?= $this->Html->link(__('testajax'), 'javascript:test()') ?></li>
    </ul>
</nav>
<div class="users index large-10 medium-9 columns content" id="main_content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
			<th width="150"><?php echo $this->Html->link('All ','javascript:select_all()'); echo $this->Html->link(' None','javascript:select_none()');?></th>
				
				
                <th><?= $this->Paginator->sort('username') ?></th>
				
                <th><?= $this->Paginator->sort('password') ?></th>
				
                <th><?= $this->Paginator->sort('role') ?></th>
				
                <th><?= $this->Paginator->sort('created') ?></th>
				
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            
								
				<?php
					//give Tr the class name trrecordid_recordid
					echo '<tr class=trrecordid_'.$user->id.'>';
				?>
				
				
				<td>
				<?php 
					//check boxes
					echo $this->Form->checkbox('row', ['hiddenField' => false,'class'=>'tablerow','id'=>'recordid_'.$user->id]);
				?>
				</td>
				

                <td><?php 
					echo $this->Html->link($user->username,['action' => 'view', $user->id]);
				?>
				</td>
                
				<td>				
				<?php

				echo ('*****') ;
				
				//show pass word if user is admin
				/*
				if($this->request->session()->read('Auth.User.role')=='admin')
					echo $user->password;
				else
					h('*****') ;
				*/
				?>
				</td>
                
				<td>
				<?php
					echo $user->role;
					//echo $user->isAdmin();
				?>
				</td>
				
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

<script>

	/**
	select all check boxes
	**/
	function select_all(){
		//select all records on the page via js
		console.log('select_all()');
		$('input[type=checkbox]').each(function () {
			this.checked=true;
		});	
	}
	
	function select_none(){
		//select none records on the page via js
		console.log('select_none()');
		$('input[type=checkbox]').each(function () {
			this.checked=false;
		});	
	}

	/**
		go through all the selected check boxes and pull the id from element id and call funtion to delete.	
	**/
	function delete_selected(){

		if (confirm('Are you sure you want to delete selected items?')) 	{
		
				$('input[type=checkbox]').each(function () {
				var sThisVal = (this.checked ? $(this).val() : "");
				if(sThisVal==1){
					var record_id=$(this).attr("id");
					console.log(record_id);
					
					tmp=record_id.split('_');
					record_id=tmp[1];
					
					//id is
					console.log(record_id);
					
					//call function to delete records
					ajax_delete(record_id);
				}
			});
		} else {
			// Do nothing!
		}
			

	}

	/**
	ajax delete given one record id
	**/
	function ajax_delete(record_id)	{

		jQuery.ajax({
			type:'POST',
			async: true,
			cache: false,
			/**********************************************************************************
			fix url
			url: 'PATH TO AJAX DELETE ACTION/'+record_id,
			eg: url: 'http://localhost/myquiz/questions-answers/ajaxdelete/'+record_id,
			**********************************************************************************/
			url:'users/ajaxdelete/'+record_id,
			success: function(response) {					
				//success
				console.log(response);   
				//hide/deletre row in table
				$('.trrecordid_'+record_id).remove();
			},
			error: function(response) {					
				console.log(response);
			}
		});		
	}
	
	
	
	function test()	{

		jQuery.ajax({
			type:'POST',
			async: true,
			cache: false,
			url:'testajax',
			success: function(response) {					
				//success
				console.log(response);   


			},
			error: function(response) {					
				console.log(response);
			}
		});		
	}


</script>
