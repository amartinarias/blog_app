

            <li>
                <div class="space-y-5 text-justify max-w-none">
                    <h2 class="text-2xl"
                    >
                    <a class="hover:text-indigo-700 transition-colors duration-100" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    <div>{{ $post->excerpt }}</div>
                    <x-post-meta :post="$post"/>
                </div>
            </li>