<x-app-layout>


    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            
    
            <title>掲示板</title>
    
            <!-- Fonts -->
            
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
        </head>
        <body>
        　  <!--掲示板投稿要素-->
        　  <div class = "create_post">
                <form action="/posts" method="POST">
                    @csrf
                    <!--講義idの入力欄-->
                    <div class='lecture'>
                        
                        <h2>講義名</h2> 
                        
                        <select id="lectures" name="post[lecture_id]" >
                            @foreach($lectures as $lecture)
                                <option value={{ $lecture->id }}>{{ $lecture->name }}</option>
                            @endforeach    
                        </select>
                    </div>
                    
                    <!--掲示板の投稿タイトル入力欄-->
                    <div class='title'>
                        <h2>タイトル</h2>
                        <input type="text" name ="post[title]" placeholder = "タイトル" value="{{ old('post.title') }}"/>
                        <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                    
                    <!--掲示板の投稿内容入力欄-->
                    <div class='body'>
                        <h2>投稿内容</h2>
                        <textarea name="post[body]" cols="50" rows="5" placeholder="ここに投稿内容を記入してください">{{ old('post.body') }}</textarea>
                        <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
                    </div>
                    
                    <!--user_idの送信-->
                    <input type="hidden" name="post[user_id]" value={{ Auth::user()->id}}>
                    
                    <!--program_idの送信-->
                    <input type="hidden" name="post[program_id]" value={{ Auth::user()->program_id}}>
                    
                    <!--入力データのsubmit-->
                    <input type="submit" value="投稿" />
                </form>
            </div>
            
            <!--掲示板投稿の一覧表示-->
            <div class="show_posts">
                <div class = 'posts'>
                    @foreach ($posts as $post)
                        <div class = 'post'>
                            <h2 class = 'created_at'>{{$post->created_at }}</h2>
                            <h2 class = 'lecture_name'>{{$post->lecture->name }}</h2>
                            <h2 class = 'program_name'>{{$post->program->name }}</h2>
                            <h2 class = 'title'>{{$post->title }}</h2>
                            <p class = 'body'>{{ $post->body }}</p>
                        </div> 
                    @endforeach    
                </div>
                <div class='paginate'>
                    {{ $posts->links() }}
                </div>
            </div>
            
            <!--授業名、プログラム名で投稿検索　後で　別にテーブルを作る必要があるか-->
            <div class='search_posts'>
                 
            </div>
        </body>
    </html>    
</x-app-layout>