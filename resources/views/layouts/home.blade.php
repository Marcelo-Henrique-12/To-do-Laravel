<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoApp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&family=Rubik:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="container">

        <div class="sidebar">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>

        <div class="content">
            <nav>
                <a href="" class="btn btn-primary">
                    Criar tarefa
                </a>
            </nav>

            <main>

                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do dia</h2>
                        <div class="graph_header-line"></div>
                        <div class="graph_header-date">

                            <img src="{{ asset('images/icon-prev.png') }}" alt="">
                                13 de Dez
                            <img src="{{ asset('images/icon-next.png') }}" alt="">

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
                        <select class="list_header-select">
                            <option value="'"> Todas as tarefas</option>

                        </select>
                    </div>

                    <div class="task_list">
                        <div class="task">
                            <div class="title">
                                <input type="checkbox">
                                <div class="task_title"> Titulo da tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere">

                                </div>
                                <div> Titulo da tarefa</div>
                            </div>
                            <div class="actions">
                                <a href="">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="Editar tarefa">
                                </a>
                                <a href="">
                                    <img src="{{ asset('images/icon-delete.png') }}" alt="Excluir tarefa">
                                </a>
                            </div>
                        </div>
                    </div>

                </section>

            </main>
        </div>

    </div>
</body>

</html>
