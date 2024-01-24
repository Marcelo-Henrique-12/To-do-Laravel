<x-layout>

    <x-slot:btn>

        <a href="{{ route('task.create') }}" class="btn btn-primary">
            Criar tarefa
        </a>

        <a href="{{ route('user.logout') }}" class="btn">
            Sair
        </a>

    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia - {{$AuthUser->name}}</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">

                <a href="{{route('home',['date'=> $date_prev_button])}}">
                    <img src="{{ asset('images/icon-prev.png') }}" alt="">
                </a>

                    {{$date_as_string}}

                <a href="{{route('home',['date'=> $date_next_button])}}">
                    <img src="{{ asset('images/icon-next.png') }}" alt="">
                </a>


            </div>
        </div>

        <div class="graph_header-subtitle">
            Tarefas: <b>3/6</b>
        </div>

        <div class="graph-content">
            <div class="graph-placeholder">

            </div>

            <div class="tasks_left_footer">

                <img src="{{ asset('images/icon-info.png') }}" alt="Tasks restantes">
                Restam 3 tarefas para serem realizadas


            </div>

        </div>



    </section>

    <section class="list">
        <div class="list_header">
            <select class="list_header-select" onChange="changeTaskStatusFilter(this)">

                <option value="all_task"> Todas as tarefas</option>
                <option value="task_pending">Tarefas Pendentes</option>
                <option value="task_done"> Tarefas Realizadas</option>

            </select>
        </div>

        <div class="task_list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach

        </div>

    </section>
<script>
        function changeTaskStatusFilter(e){
            if(e.value == 'task_pending'){
                document.querySelectorAll('.task_done').forEach(function(element) {
                    element.style.display = 'none';
                });
                document.querySelectorAll('.task_pending').forEach(function(element) {
                    element.style.display = 'block';
                });

            } else if (e.value == 'task_done'){
                document.querySelectorAll('.task_pending').forEach(function(element) {
                    element.style.display = 'none';
                });
                document.querySelectorAll('.task_done').forEach(function(element) {
                    element.style.display = 'block';
                });

            } else if (e.value == 'all_task'){
                document.querySelectorAll('.task_pending').forEach(function(element) {
                    element.style.display = 'block';
                });
                document.querySelectorAll('.task_done').forEach(function(element) {
                    element.style.display = 'block';
                });
            }
        }

</script>
<script>
    async function taskUpdate(element){

        let status = element.checked;
        let taskId = element.dataset.id;
        let url = '{{route('task.update')}}';

        let rawResult = await fetch(url, {
            method: 'POST',
            headers:{
                'Content-type': 'application/json',
                'accept': 'application/json',
            },
            body: JSON.stringify({status, taskId, _token: '{{csrf_token()}}'})
        });

        result = await rawResult.json();

        if(!result.success){
            element.check = !status;
        }

    }
</script>

</x-layout>
