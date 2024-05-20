<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import TopicBadge from "@/Components/TopicBadge.vue";
import MoreBlogsFromAuthorSection from "@/Components/MoreBlogsFromAuthorSection.vue";
import BlogDetailActionBar from "@/Components/BlogDetailActionBar.vue";
import RecommendedBlogsFromPlatformSection from "@/Components/RecommendedBlogsFromPlatformSection.vue";
import AuthorBlogDetailProfile from "@/Components/AuthorBlogDetailProfile.vue";
</script>

<template>
    <Head title="Home" />

    <AppLayout>
        <section class="min-h-full">
            <div class="max-w-[900px] px-5 py-10 mx-auto space-y-8">
                <h1
                    class="text-2xl font-extrabold text-center text-gray-800 md:text-4xl"
                >
                    Writing Code like a Senior Developer in Laravel
                </h1>

                <AuthorBlogDetailProfile />

                <div class="p-3 border border-gray-200 rounded-md shadow">
                    <img
                        src="https://ashallendesign.ams3.cdn.digitaloceanspaces.com/public/blog/96/top-laravel-and-php-blogs.png"
                        alt=""
                        class="object-contain w-full h-full rounded-md"
                    />
                </div>

                <BlogDetailActionBar />

                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Tenetur vero dolorum, similique distinctio magni
                        laborum? Incidunt veritatis ab reprehenderit,
                        perferendis animi sunt architecto minus explicabo qui,
                        quasi ad voluptatum laborum?
                    </p>

                    <br />

                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Aspernatur, corrupti. Quae, animi! Veniam maiores
                        vel veritatis minima soluta ab corporis deleniti
                        corrupti sint, a quis ex laborum autem nemo consequuntur
                        fugiat at hic unde iusto? Rem voluptate, dolorum
                        temporibus ullam harum nam, facere officia nisi
                        distinctio eligendi praesentium voluptatem cupiditate
                        obcaecati hic optio dicta? Voluptatem odit sit cumque
                        obcaecati facilis deleniti doloremque eos tenetur. Quas
                        atque totam mollitia quaerat. Totam quam laudantium
                        praesentium! Nulla, pariatur fugit accusantium modi quia
                        voluptas praesentium cupiditate corrupti veritatis sequi
                        distinctio et aut! Molestiae dolores exercitationem
                        fugit inventore eveniet officiis vero quae labore quasi
                        qui corporis asperiores doloremque, perspiciatis
                        quisquam architecto? Maiores ad facere illo quidem
                        cumque. Odit deleniti neque nulla amet dignissimos
                        itaque, suscipit doloremque magni explicabo ducimus
                        natus. Officiis ratione fugiat error totam ad harum
                        eligendi aliquam qui dicta dolore non, impedit sapiente
                        omnis mollitia voluptas. Amet, dolor omnis saepe
                        similique labore fugiat, ratione eligendi nulla velit
                        provident nisi possimus! Doloremque, nesciunt. Delectus
                        alias saepe laboriosam voluptate aliquam quisquam ullam
                        dicta! Vitae aliquid officiis mollitia dolorum omnis
                        quaerat dolorem perspiciatis, ipsa maxime. Laudantium
                        debitis natus quaerat necessitatibus accusamus! Pariatur
                        iure aliquid saepe assumenda cum atque ipsum laudantium
                        veniam distinctio, facere delectus similique sint.
                    </p>

                    <br />

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. A ipsum nulla, suscipit itaque cum explicabo error
                        sapiente. Eveniet sit nobis enim adipisci perferendis
                        reprehenderit voluptatum ipsum veritatis delectus eius
                        voluptatem, possimus ab similique! Dolores saepe ut
                        deserunt culpa nemo distinctio, alias ducimus aperiam
                        nam quisquam molestias nihil labore placeat ullam?
                    </p>

                    <br />

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Fugiat provident esse explicabo? Cumque ipsum
                        ipsam molestiae officiis fugiat quasi aliquam ad est
                        magni, ullam adipisci numquam aperiam saepe porro
                        distinctio!
                    </p>

                    <br />

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Molestias quo natus perferendis fugit necessitatibus
                        officiis nisi rerum temporibus quisquam voluptatem
                        architecto soluta ut nihil voluptas aut, dolores
                        voluptatibus iure maiores odio possimus enim veritatis
                        deserunt, consequatur vitae. Enim itaque consequuntur
                        maiores incidunt voluptatum omnis dolore! Modi et quos
                        laborum qui officiis obcaecati voluptate veritatis
                        dolorum repellat consequatur similique ab assumenda
                        iusto, ut blanditiis temporibus labore, quibusdam
                        possimus quia? Obcaecati autem adipisci nostrum fuga?
                        Omnis vel molestias dicta officia, mollitia cumque magni
                        consectetur voluptate adipisci sapiente, dolorem, quas
                        maxime repudiandae laudantium aliquam illo dolore optio
                        explicabo doloremque tenetur placeat? Reprehenderit
                        alias saepe autem rerum cum aliquam ipsa a mollitia rem
                        quasi quidem maxime animi optio repellendus officia unde
                        eos, aspernatur modi dolores inventore. Doloremque,
                        repellendus? Natus earum ipsa eum nesciunt
                        exercitationem iusto qui quod totam voluptatem adipisci
                        consectetur odit obcaecati, repellat quo officia fuga,
                        explicabo modi voluptates placeat culpa minus ducimus
                        recusandae! Error nostrum impedit nihil! Quasi qui
                        nesciunt, vero impedit, ea error necessitatibus
                        voluptatem quo obcaecati fuga voluptate natus enim
                        distinctio dicta possimus sit esse deserunt veniam, odio
                        saepe optio? Minima ut pariatur perspiciatis enim saepe
                        rem nulla vel id! Neque doloribus pariatur corrupti
                        dolorem a cumque quibusdam dignissimos possimus!
                    </p>
                </div>

                <div class="flex items-start justify-start w-full">
                    <p class="w-20 mt-0.5 font-extrabold text-gray-800 text-md">
                        Topics &nbsp; -
                    </p>

                    <div class="flex flex-wrap items-center space-x-2">
                        <TopicBadge text="Data Science" />
                        <TopicBadge text="Machine Learning" />
                        <TopicBadge text="Technology" />
                    </div>
                </div>
            </div>
        </section>

        <MoreBlogsFromAuthorSection />

        <RecommendedBlogsFromPlatformSection />
    </AppLayout>
</template>
