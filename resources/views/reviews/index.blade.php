<x-app-layout>


    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            
    
            <title>口コミ</title>
    
            <!-- Fonts -->
            
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
        </head>
        <body>
        　  <!--掲示板投稿要素-->
        　  <div class = "create_review">
                <form action="/reviews" method="POST">
                    @csrf
                    <!--講義idの入力欄-->
                    <div class='lecture'>
                        
                        <h2>講義名</h2> 
                        
                        <select id="lectures" name="review[lecture_id]" >
                            @foreach($lectures as $lecture)
                                <option value={{ $lecture->id }}>{{ $lecture->name }}</option>
                            @endforeach    
                        </select>
                    </div>
                    <!--楽単度入力-->
                    <fieldset class = "handy_point">
                        <h2>楽単度</h2> 
                        <input type="radio" id = "star5" name="review[handy_point]" value="5">
                        <label for="star5">5 stars</label>
                        <input type="radio" id = "star4" name="review[handy_point]" value="4">
                        <label for="star4">4 stars</label>
                        <input type="radio" id = "star3" name="review[handy_point]" value="3">
                        <label for="star3">3 stars</label>
                        <input type="radio" id = "star2" name="review[handy_point]" value="2">
                        <label for="star2">2 stars</label>
                        <input type="radio" id = "star1" name="review[handy_point]" value="1">
                        <label for="star1">1 star</label>
                    </fieldset>
                    
                    <!--オススメ度-->
                    <fieldset class = "recommend_point">
                        <h2>オススメ度</h2> 
                        <input type="radio" id = "star5" name="review[recommend_point]" value="5">
                        <label for="star5">5 stars</label>
                        <input type="radio" id = "star4" name="review[recommend_point]" value="4">
                        <label for="star4">4 stars</label>
                        <input type="radio" id = "star3" name="review[recommend_point]" value="3">
                        <label for="star3">3 stars</label>
                        <input type="radio" id = "star2" name="review[recommend_point]" value="2">
                        <label for="star2">2 stars</label>
                        <input type="radio" id = "star1" name="review[recommend_point]" value="1">
                        <label for="star1">1 star</label>
                    </fieldset>
                    
                    <!--口コミの投稿内容入力欄-->
                    <div class='body'>
                        <h2>投稿内容</h2>
                        <textarea name="review[body]" cols="50" rows="5" placeholder="ここに投稿内容を記入してください">{{ old('review.body') }}</textarea>
                        <p class="body_error" style="color:red">{{ $errors->first('review.body') }}</p>
                    </div>
                    
                    <!--user_idの送信-->
                    <input type="hidden" name="review[user_id]" value={{ Auth::user()->id}}>
                    
                    <!--program_idの送信-->
                    <input type="hidden" name="review[program_id]" value={{ Auth::user()->program_id}}>
                    
                    <!--入力データのsubmit-->
                    <input type="submit" value="投稿" />
                </form>
            </div>
            
            <!--掲示板投稿の一覧表示-->
            <div class="show_reviews">
                <div class = 'reviews'>
                    @foreach ($reviews as $review)
                        <div class = 'review'>
                            <h2 class = 'updated_at'>{{$review->updated_at }}</h2>
                            <h2 class = 'lecture_name'>{{$review->lecture->name }}</h2>
                            <h2 class = 'program_name'>{{$review->program->name }}</h2>
                            <h2 class = 'handy_point'>{{ $review->handy_point }}</h2>
                            <h2 class = 'recommend_point'>{{ $review->recommend_point }}</h2>
                            <p class = 'body'>{{ $review->body }}</p>
                        </div> 
                    @endforeach    
                </div>
                
            </div>
            <div class='paginate'>
                    {{ $reviews->links() }}
            </div>
            
            <!--授業名、プログラム名で投稿検索　後で　別にテーブルを作る必要があるか-->
            <div class='search_reviews'>
                 
            </div>
            

        </body>
    </html>    
</x-app-layout>