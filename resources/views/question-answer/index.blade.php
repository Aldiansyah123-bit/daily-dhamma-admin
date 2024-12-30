@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            @include('question-answer.submenu')

            <hr>

            <table id="question-answer-table" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Title</th>
                        <th>Question</th>
                        <th>Answer</th>
                    </tr>
                </thead>
                <tbody>
                @if($list_question_answer)
                @foreach($list_question_answer as $key => $question_answer)
                    <tr onclick="location.href='{{ url('question-answer/' . $key . '/edit') }}'" class="onclick-link">
                        <td>{{ $key }}</td>
                        <td>{{ $question_answer['title'] }}</td>
                        <td>{{ \Illuminate\Support\Str::limit(strip_tags($question_answer['question']), 100) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit(strip_tags($question_answer['answer']), 100) }}</td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#question-answer-table').DataTable();
        } );
    </script>
@endsection
