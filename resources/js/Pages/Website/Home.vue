<template>
    <div>
        <Frontend>
            <Head title="Home" />

            <Hero />
            <Achievements />
            <PopularCategories />
            <CompaniesShowcase />
            <PopularCourses />
            <AboutUs />
            <TopInstructors />
            <FAQ />
            <StartJourney />
            <Cta />
            <Footer />

            <!-- <section class="style-guide">
                <h1 style="margin-block: 1rem">Components style guide</h1>
                <Button
                    name="testButtonName"
                    @onTap="() => console.log('do things here!')"
                    :to="route('website.courses')"
                >
                    Primary style button
                    <span
                        style="margin-inline-start: 0.5rem"
                        class="fas fa-arrow-right"
                    ></span> </Button
                ><Button
                    outlined="true"
                    name="testButtonName"
                    @onTap="() => console.log('do things here!')"
                    :to="route('website.courses')"
                >
                    Outlined style button
                    <span
                        style="margin-inline-start: 0.5rem"
                        class="fas fa-arrow-right"
                    ></span>
                </Button>
                <div class="card">card</div>
                <Tag>skilled instructor</Tag>
                <Tag
                    style="
                        background: var(--color-brand);
                        color: var(--color-white);
                    "
                    >skilled instructor</Tag
                >
                <input
                    type="text"
                    name="text"
                    id="text"
                    placeholder="Email Address"
                />
                <Details
                    style="max-width: 62ch"
                    title="What kind of courses do you offer?"
                    content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, odio ad ipsam delectus, beatae ab iusto maxime ex eius voluptates quia recusandae adipisci tempore nobis id fuga unde consequuntur sunt."
                />
                <Details
                    style="max-width: 62ch"
                    title="What kind of courses do you offer?"
                    content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, odio ad ipsam delectus, beatae ab iusto maxime ex eius voluptates quia recusandae adipisci tempore nobis id fuga unde consequuntur sunt."
                />
                <Details
                    style="max-width: 62ch"
                    title="What kind of courses do you offer?"
                    content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, odio ad ipsam delectus, beatae ab iusto maxime ex eius voluptates quia recusandae adipisci tempore nobis id fuga unde consequuntur sunt."
                />
                <Details
                    style="max-width: 62ch"
                    title="What kind of courses do you offer?"
                    content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, odio ad ipsam delectus, beatae ab iusto maxime ex eius voluptates quia recusandae adipisci tempore nobis id fuga unde consequuntur sunt."
                />
                <h2>
                    Thousand of Top Online Courses
                    <span class="styled-text">Now in One Place</span>
                </h2>
                <img
                    class="styled-border-md"
                    style="
                        width: 20rem;
                        height: 20rem;
                        aspect-ratio: 1;
                        display: block;
                    "
                    src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    alt=""
                />
                <StyledWrapper size="20" style="margin-block: 1rem"
                    ><img
                        src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt=""
                /></StyledWrapper>
                <TeacherCard
                    name="Ali Abdali"
                    title="Software Engineer"
                    size="20"
                />
            </section> -->
        </Frontend>
    </div>
</template>

<script setup>
import AboutUs from "@/Components/Website/AboutUs.vue";
import Achievements from "@/Components/Website/Achievements.vue";
import CompaniesShowcase from "@/Components/Website/CompaniesShowcase.vue";
import Cta from "@/Components/Website/Cta.vue";
import Hero from "@/Components/Website/Hero.vue";
import FAQ from "@/Components/Website/home/FAQ.vue";
import Footer from "@/Components/Website/home/Footer.vue";
import PopularCourses from "@/Components/Website/home/PopularCourses.vue";
import PopularCategories from "@/Components/Website/PopularCategories.vue";
import StartJourney from "@/Components/Website/StartJourney.vue";
import TopInstructors from "@/Components/Website/TopInstructors.vue";
import Frontend from "@/Layouts/WebsiteLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>
