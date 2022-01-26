<main>
    <div class="container">
        <div class="discs-list">

            <!-- SINGLE DISC -->
            <div v-for="(album, index) in albums" :key="index" class="single-disc">

                <!-- Poster -->
                <img :src="album.poster" alt="">

                <!-- Title -->
                <div class="title">{{ album.title }}</div>

                <!-- Author -->
                <div class="author">{{ album.author }}</div>

                <!-- Year -->
                <div class="year">{{ album.year }}</div>
            </div>
        </div>
    </div>
</main>