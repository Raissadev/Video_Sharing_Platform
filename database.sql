--
-- PostgreSQL database dump
--

-- Dumped from database version 14.1
-- Dumped by pg_dump version 14.1

-- Started on 2021-12-31 12:02:13

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 3339 (class 1262 OID 40960)
-- Name: my_youtube_with_php; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE my_youtube_with_php WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';


ALTER DATABASE my_youtube_with_php OWNER TO postgres;

\connect my_youtube_with_php

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 216 (class 1259 OID 49211)
-- Name: albuns; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.albuns (
    id integer NOT NULL,
    user_id integer NOT NULL,
    channel_content integer NOT NULL
);


ALTER TABLE public.albuns OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 49210)
-- Name: albuns_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.albuns_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.albuns_id_seq OWNER TO postgres;

--
-- TOC entry 3340 (class 0 OID 0)
-- Dependencies: 215
-- Name: albuns_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.albuns_id_seq OWNED BY public.albuns.id;


--
-- TOC entry 214 (class 1259 OID 49204)
-- Name: channel_contents; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.channel_contents (
    id integer NOT NULL,
    owner integer NOT NULL,
    channel integer NOT NULL,
    title character varying(255) NOT NULL,
    description text NOT NULL,
    thumbnail character varying(255) NOT NULL,
    video character varying(255) NOT NULL,
    likes integer,
    deslikes integer
);


ALTER TABLE public.channel_contents OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 49203)
-- Name: channel_contents_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.channel_contents_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.channel_contents_id_seq OWNER TO postgres;

--
-- TOC entry 3341 (class 0 OID 0)
-- Dependencies: 213
-- Name: channel_contents_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.channel_contents_id_seq OWNED BY public.channel_contents.id;


--
-- TOC entry 212 (class 1259 OID 40988)
-- Name: channels; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.channels (
    id integer NOT NULL,
    owner integer,
    name character varying(255) NOT NULL,
    about text NOT NULL,
    image character varying(255),
    videos text,
    followers text
);


ALTER TABLE public.channels OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 40987)
-- Name: channels_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.channels_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.channels_id_seq OWNER TO postgres;

--
-- TOC entry 3342 (class 0 OID 0)
-- Dependencies: 211
-- Name: channels_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.channels_id_seq OWNED BY public.channels.id;


--
-- TOC entry 210 (class 1259 OID 40978)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    about character varying(255),
    image character varying(255)
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 40977)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 3343 (class 0 OID 0)
-- Dependencies: 209
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 3182 (class 2604 OID 49214)
-- Name: albuns id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.albuns ALTER COLUMN id SET DEFAULT nextval('public.albuns_id_seq'::regclass);


--
-- TOC entry 3181 (class 2604 OID 49207)
-- Name: channel_contents id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.channel_contents ALTER COLUMN id SET DEFAULT nextval('public.channel_contents_id_seq'::regclass);


--
-- TOC entry 3180 (class 2604 OID 40991)
-- Name: channels id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.channels ALTER COLUMN id SET DEFAULT nextval('public.channels_id_seq'::regclass);


--
-- TOC entry 3179 (class 2604 OID 40981)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 3333 (class 0 OID 49211)
-- Dependencies: 216
-- Data for Name: albuns; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.albuns (id, user_id, channel_content) VALUES (3, 28, 5);
INSERT INTO public.albuns (id, user_id, channel_content) VALUES (6, 28, 4);
INSERT INTO public.albuns (id, user_id, channel_content) VALUES (7, 28, 7);


--
-- TOC entry 3331 (class 0 OID 49204)
-- Dependencies: 214
-- Data for Name: channel_contents; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.channel_contents (id, owner, channel, title, description, thumbnail, video, likes, deslikes) VALUES (7, 28, 1, 'Why work with php?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla velit a elementum gravida.', 'banner-auth.png', 'song-three.mp4', 1, 0);
INSERT INTO public.channel_contents (id, owner, channel, title, description, thumbnail, video, likes, deslikes) VALUES (6, 28, 1, 'How to submit a form with NodeJS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque congue lobortis diam vitae egestas. Sed quis lacus at augue blandit ornare.', 'hello-world.png', 'song-three.mp4', 0, 0);
INSERT INTO public.channel_contents (id, owner, channel, title, description, thumbnail, video, likes, deslikes) VALUES (8, 28, 1, 'Lorem ipsum Amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla velit a elementum gravida.', 'banner-auth.png', 'song-three.mp4', 6, 1);
INSERT INTO public.channel_contents (id, owner, channel, title, description, thumbnail, video, likes, deslikes) VALUES (4, 28, 1, 'Why good practices?', 'In vel ante sit amet metus condimentum bibendum. Curabitur ut turpis mi. Maecenas urna est, convallis eget efficitur eu, cursus a lectus. Nulla malesuada, ligula vitae pharetra iaculis...', 'song-eight.png', 'song-three.mp4', 449, 1);
INSERT INTO public.channel_contents (id, owner, channel, title, description, thumbnail, video, likes, deslikes) VALUES (5, 28, 1, 'How to start programming?', 'Maecenas efficitur faucibus consectetur. Cras non sapien ac mi viverra rhoncus. Sed ornare, diam sit amet vulputate iaculis, dui elit fringilla diam, sit amet dignissim nibh nisl tristique dolor.', 'song-four.jpg', 'song-two.mp4', 3, 4);


--
-- TOC entry 3329 (class 0 OID 40988)
-- Dependencies: 212
-- Data for Name: channels; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.channels (id, owner, name, about, image, videos, followers) VALUES (3, 28, 'Music Programmers ', 'About sis amet dolor', 'channel-three.jpg', '0', '0');
INSERT INTO public.channels (id, owner, name, about, image, videos, followers) VALUES (5, 28, 'Only the crazy ones', 'Donec iaculis, magna at luctus vestibulum, mauris libero feugiat eros, in euismod lorem erat et sem. Mauris iaculis commodo tortor eget accumsan. Cras at orci diam.', 'channel-five.jpg', '0', '0');
INSERT INTO public.channels (id, owner, name, about, image, videos, followers) VALUES (4, 28, 'Amateur Programmers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tellus orci, aliquam a blandit id, dictum ac nisl. In congue odio quis lorem egestas feugiat nec in ex. Praesent et enim commodo, faucibus odio a, elementum nibh. Ut sodales felis a mi posuere sodales et nec nunc. ', 'channel-four.jpg', '0', '4,28');
INSERT INTO public.channels (id, owner, name, about, image, videos, followers) VALUES (1, 28, 'Programming', 'Lorem ipsum', 'channel-one.png', '1', '0,28');
INSERT INTO public.channels (id, owner, name, about, image, videos, followers) VALUES (6, 28, 'After five', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum nisl vitae ante ultrices, sit amet viverra arcu gravida. Fusce semper ullamcorper diam, et bibendum ligula mattis eu. Fusce imperdiet feugiat auctor. Morbi sit amet rutrum tellus. Quisque eget ultrices velit, vitae vestibulum leo.', 'channel-two.png', '0', '0');
INSERT INTO public.channels (id, owner, name, about, image, videos, followers) VALUES (7, 35, 'Only witches', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in mi nisl. Nam id scelerisque nibh. Etiam elit ante, porta maximus tempor et, dignissim lobortis ex.', 'song-eight.png', '0', '0');


--
-- TOC entry 3327 (class 0 OID 40978)
-- Dependencies: 210
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.users (id, name, email, password, about, image) VALUES (33, 'Jhon Doe', 'jhon@doe.com', '12345678', 'Designer Advs', 'channel-five.jpg');
INSERT INTO public.users (id, name, email, password, about, image) VALUES (28, 'Raissa Dev', 'raissa.fullstack@gmail.com', '12345678', 'Desenvolvedora Full-Stack & Mobile ', 'myImg.png');
INSERT INTO public.users (id, name, email, password, about, image) VALUES (34, 'Amanda Doe', 'amanda@doe.com', '12345678', 'Interior designer', 'song-two.png');
INSERT INTO public.users (id, name, email, password, about, image) VALUES (35, 'Harry Potter', 'harry@potter.com', '12345678', 'Hogwarts wizard', 'user-six.jpg');
INSERT INTO public.users (id, name, email, password, about, image) VALUES (36, 'Mabel Doe', 'mabel@doe.com', '12345678', 'Anime Creator', 'hello-world.png');
INSERT INTO public.users (id, name, email, password, about, image) VALUES (37, 'Dipper Doe', 'dipper@doe.com', '12345678', 'Theater actor', 'song-one.jpg');


--
-- TOC entry 3344 (class 0 OID 0)
-- Dependencies: 215
-- Name: albuns_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.albuns_id_seq', 7, true);


--
-- TOC entry 3345 (class 0 OID 0)
-- Dependencies: 213
-- Name: channel_contents_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.channel_contents_id_seq', 8, true);


--
-- TOC entry 3346 (class 0 OID 0)
-- Dependencies: 211
-- Name: channels_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.channels_id_seq', 7, true);


--
-- TOC entry 3347 (class 0 OID 0)
-- Dependencies: 209
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 37, true);


--
-- TOC entry 3186 (class 2606 OID 40995)
-- Name: channels channels_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.channels
    ADD CONSTRAINT channels_pkey PRIMARY KEY (id);


--
-- TOC entry 3184 (class 2606 OID 40985)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


-- Completed on 2021-12-31 12:02:15

--
-- PostgreSQL database dump complete
--

