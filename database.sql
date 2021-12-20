PGDMP         8    	            y            my_youtube_with_php    14.1    14.1                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            	           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            
           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    40960    my_youtube_with_php    DATABASE     s   CREATE DATABASE my_youtube_with_php WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';
 #   DROP DATABASE my_youtube_with_php;
                postgres    false            �            1259    49211    albuns    TABLE     |   CREATE TABLE public.albuns (
    id integer NOT NULL,
    user_id integer NOT NULL,
    channel_content integer NOT NULL
);
    DROP TABLE public.albuns;
       public         heap    postgres    false            �            1259    49210    albuns_id_seq    SEQUENCE     �   CREATE SEQUENCE public.albuns_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.albuns_id_seq;
       public          postgres    false    216                       0    0    albuns_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.albuns_id_seq OWNED BY public.albuns.id;
          public          postgres    false    215            �            1259    49204    channel_contents    TABLE     I  CREATE TABLE public.channel_contents (
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
 $   DROP TABLE public.channel_contents;
       public         heap    postgres    false            �            1259    49203    channel_contents_id_seq    SEQUENCE     �   CREATE SEQUENCE public.channel_contents_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.channel_contents_id_seq;
       public          postgres    false    214                       0    0    channel_contents_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.channel_contents_id_seq OWNED BY public.channel_contents.id;
          public          postgres    false    213            �            1259    40988    channels    TABLE     �   CREATE TABLE public.channels (
    id integer NOT NULL,
    owner integer,
    name character varying(255) NOT NULL,
    about text NOT NULL,
    image character varying(255),
    videos text,
    followers text
);
    DROP TABLE public.channels;
       public         heap    postgres    false            �            1259    40987    channels_id_seq    SEQUENCE     �   CREATE SEQUENCE public.channels_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.channels_id_seq;
       public          postgres    false    212                       0    0    channels_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.channels_id_seq OWNED BY public.channels.id;
          public          postgres    false    211            �            1259    40978    users    TABLE     �   CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    about character varying(255),
    image character varying(255)
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    40977    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    210                       0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    209            n           2604    49214 	   albuns id    DEFAULT     f   ALTER TABLE ONLY public.albuns ALTER COLUMN id SET DEFAULT nextval('public.albuns_id_seq'::regclass);
 8   ALTER TABLE public.albuns ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216            m           2604    49207    channel_contents id    DEFAULT     z   ALTER TABLE ONLY public.channel_contents ALTER COLUMN id SET DEFAULT nextval('public.channel_contents_id_seq'::regclass);
 B   ALTER TABLE public.channel_contents ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    213    214            l           2604    40991    channels id    DEFAULT     j   ALTER TABLE ONLY public.channels ALTER COLUMN id SET DEFAULT nextval('public.channels_id_seq'::regclass);
 :   ALTER TABLE public.channels ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    212    211    212            k           2604    40981    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209    210                      0    49211    albuns 
   TABLE DATA           >   COPY public.albuns (id, user_id, channel_content) FROM stdin;
    public          postgres    false    216   #                  0    49204    channel_contents 
   TABLE DATA           u   COPY public.channel_contents (id, owner, channel, title, description, thumbnail, video, likes, deslikes) FROM stdin;
    public          postgres    false    214   K                  0    40988    channels 
   TABLE DATA           T   COPY public.channels (id, owner, name, about, image, videos, followers) FROM stdin;
    public          postgres    false    212   �!       �          0    40978    users 
   TABLE DATA           H   COPY public.users (id, name, email, password, about, image) FROM stdin;
    public          postgres    false    210   $                  0    0    albuns_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.albuns_id_seq', 3, true);
          public          postgres    false    215                       0    0    channel_contents_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.channel_contents_id_seq', 5, true);
          public          postgres    false    213                       0    0    channels_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.channels_id_seq', 7, true);
          public          postgres    false    211                       0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 37, true);
          public          postgres    false    209            r           2606    40995    channels channels_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.channels
    ADD CONSTRAINT channels_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.channels DROP CONSTRAINT channels_pkey;
       public            postgres    false    212            p           2606    40985    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    210                  x�3�4��4�2Q�\1z\\\ u�         I  x�E��R�0@��W����P��(���,)�v���=�u�w3n���}�6Ů���:��5�OH�*
�<sd�3Z��b�BQ��w�����T#��7��/�F� /4A�;�ab, ���6˫)*c����@����p�x���'M�*�p����d�΢�aS˭�AZMs�)��t��ge�.������������1*G����F��T=}��'.T�
�<R����8�,��+�k�ќHt,�avN��U�����u�&��=ۑ�`&1�p����Ɗ��B�=��ᇚ8-����t������n���G         d  x����n�@D��W�����F @�8��ri[T�ȳ�v�>5�)�� �@pz�zS��.o�����C�Sb�%e��Xe��^
������ �쒈������|s�F|��N�&��B1H�>�ߒ��NsO���ą\��f:H.:TW};�	���"m�N�B<�OI���H!��ԉ7t�t�n!=
#���#�P��V�9��871Y�Qٛ���N����;�Ejz˥�:�}�~aDeF�cu�b���{�V�D��ƞ�8�myO����%��8���cM@����fg�Khc�*G��X��|p���Q�Գ�`�,af$A�
��-W�y��=ĉG%Vv�~�j�I�x2y�}�U��dYj��NcM������E�������M�����;o=�f��"�څ�;���1ɏ`wJڌ�ZX�qLՕ�V�u0N���l%�?�Ȇ>�l�Enm�9�6���b�7$�F�p:Up\
J]��������pH)BӠ'��T׼��[o6�0��a
F�W/o:��T��8�m�~�]�,�����H��-n�Ԗo	6��E�����{�)��Y=�X �}��e¬���8���{6]F��D�]9:�e6��_���y      �     x�e�=O�0��˯�ĖH4���F�k|u\l_d�	���,(�{����]Y�K�N�Lp�a'���-<.��j��BMA+G^Trд����*.��[xC���)�1���k�,j3��$٣x���}*�q�6$��V�SY��ʢ��1Ź����5{!�l!�Sy?���=z���"�Ӱ����g5���z	�@>�;�Z��'2I�NinR9mI<y�Gd�#{#�"�u��kN�����ױ���H������Ȳ��R��     