<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    @foreach ($posts as $post)
        <p>{{ $post->content }}</p>
    @endforeach
</div>
