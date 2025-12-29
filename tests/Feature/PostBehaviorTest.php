<?php

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('allows a profile to publish a post', function () {
    $profile = Profile::factory()->create();

    $post = Post::publish($profile, 'This is a new post.');

    //que esperamos al hacer el test
    expect($post->exists())->toBeTrue()
        ->and($post->profile->is($profile))->toBeTrue()
        ->and($post->parent_id)->toBeNull()
        ->and($post->repost_of_id)->toBeNull();
});
