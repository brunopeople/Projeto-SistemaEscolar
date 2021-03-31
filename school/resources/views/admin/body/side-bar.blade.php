

 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>Pagina</b> Administrativa</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}" >
          <a href="{{ route('dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
    @if(Auth::user()->role == 'Admin')
        <li class="treeview {{ ($prefix == '/users')?'active':'' }} " >
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Admininstrar Usuário</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>Ver Usuário</a></li>
            <li><a href="{{ route('users.add') }}"><i class="ti-more"></i>Adicionar Usuário</a></li>
          </ul>
        </li> 
        @endif
		  
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="grid"></i> <span>Editar Perfil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Seu Perfil</a></li>
        <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Mudar Senha</a></li>
            
          </ul>
        </li>



<li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
          <a href="#">
            <i data-feather="credit-card"></i> <span>Ajustando adequação</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="{{ route('student.class.view') }}"><i class="ti-more"></i>Classe</a></li>
         <li><a href="{{ route('student.year.view') }}"><i class="ti-more"></i>Ano</a></li>
         <li><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Grupo</a></li>
         <li><a href="{{ route('student.shift.view') }}"><i class="ti-more"></i>Turnos</a></li>
         <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Taxa Categorica</a></li>
        <li><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Total da Taxa Categórica</a></li>
         <li><a href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Exames</a></li>
         <li><a href="{{ route('school.subject.view') }}"><i class="ti-more"></i>Matricular Escola</a></li>
         <li><a href="{{ route('assign.subject.view') }}"><i class="ti-more"></i>Matricular aluno</a></li>
         <li><a href="{{ route('designation.view') }}"><i class="ti-more"></i>Designar</a></li>
         
            
          </ul>
        </li>


<li class="treeview {{ ($prefix == '/students')?'active':'' }}">
          <a href="#">
             <i data-feather="hard-drive"></i></i> <span>Gestão do Estudante</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="{{ route('student.registration.view') }}"><i class="ti-more"></i>Registro de Estudante</a></li>

        <li><a href="{{ route('roll.generate.view') }}"><i class="ti-more"></i>Gerar Lista</a></li>
        <li><a href="{{ route('registration.fee.view') }}"><i class="ti-more"></i>Registrar Taxa </a></li>
         <li><a href="{{ route('monthly.fee.view') }}"><i class="ti-more"></i>Taxa Mensal </a></li>
         <li><a href="{{ route('exam.fee.view') }}"><i class="ti-more"></i>Taxa Exame </a></li>
         
         
            
          </ul>
        </li>


<li class="treeview {{ ($prefix == '/employees')?'active':'' }}">
          <a href="#">
            <i data-feather="package"></i> <span>Gestão Empregado</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li  class="{{ ($route == 'employee.registration.view')?'active':'' }}"><a href="{{ route('employee.registration.view') }}"><i class="ti-more"></i>Employee Registration</a></li>

         <li  class="{{ ($route == 'employee.salary.view')?'active':'' }}"><a href="{{ route('employee.salary.view') }}"><i class="ti-more"></i>Employee Salary</a></li>

         <li><a href="{{ route('employee.leave.view') }}"><i class="ti-more"></i>Deixar Empregado</a></li>
         <li><a href="{{ route('employee.attendance.view') }}"><i class="ti-more"></i>Bater Ponto</a></li>
          <li><a href="{{ route('employee.monthly.salary') }}"><i class="ti-more"></i>Salário Mensal do Empregado</a></li>
 
            
          </ul>
        </li>



<li class="treeview {{ ($prefix == '/marks')?'active':'' }}">
          <a href="#">
             <i data-feather="edit-2"></i> <span> Gestão Marcas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'marks.entry.add')?'active':'' }}"><a href="{{ route('marks.entry.add') }}"><i class="ti-more"></i>Marks Entry</a></li> 
      <li class="{{ ($route == 'marks.entry.edit')?'active':'' }}"><a href="{{ route('marks.entry.edit') }}"><i class="ti-more"></i>Marks Edit</a></li>

       <li class="{{ ($route == 'marks.entry.grade')?'active':'' }}"><a href="{{ route('marks.entry.grade') }}"><i class="ti-more"></i>Marks Grade</a></li> 

            
          </ul>
        </li>





<li class="treeview {{ ($prefix == '/accounts')?'active':'' }}">
          <a href="#">
            <i data-feather="inbox"></i> <span> Gestão de Contas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'student.fee.view')?'active':'' }}"><a href="{{ route('student.fee.view') }}"><i class="ti-more"></i>Student Fee</a></li> 
        <li class="{{ ($route == 'account.salary.view')?'active':'' }}"><a href="{{ route('account.salary.view') }}"><i class="ti-more"></i>Employee Salary</a></li> 

        <li class="{{ ($route == 'other.cost.view')?'active':'' }}"><a href="{{ route('other.cost.view') }}"><i class="ti-more"></i>Other Cost</a></li>

            
          </ul>
        </li>

		
        
		 
        <li class="header nav-small-cap">Reportar interfarce</li>
		  
       <li class="treeview {{ ($prefix == '/reports')?'active':'' }}">
          <a href="#">
            <i data-feather="server"></i></i> <span> Gestão de Relatórios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'monthly.profit.view')?'active':'' }}"><a href="{{ route('monthly.profit.view') }}"><i class="ti-more"></i>Monthly-Yearly Profite</a></li> 

          <li class="{{ ($route == 'marksheet.generate.view')?'active':'' }}"><a href="{{ route('marksheet.generate.view') }}"><i class="ti-more"></i>MarkSheet Generate</a></li>

           <li class="{{ ($route == 'attendance.report.view')?'active':'' }}"><a href="{{ route('attendance.report.view') }}"><i class="ti-more"></i>Attendance Report</a></li>

           <li class="{{ ($route == 'student.result.view')?'active':'' }}"><a href="{{ route('student.result.view') }}"><i class="ti-more"></i>Student Result </a></li>

           <li class="{{ ($route == 'student.idcard.view')?'active':'' }}"><a href="{{ route('student.idcard.view') }}"><i class="ti-more"></i>Student ID Card </a></li>    

             
        

            
          </ul>
        </li>
		
		 
		  
		 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>