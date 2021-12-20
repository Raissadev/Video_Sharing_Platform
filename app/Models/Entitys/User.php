<?php

namespace app\Models\Entitys;

class User
{

    protected int $id;
    protected string $name;
    protected string $email;
    protected string $password;
    protected string $about;
    protected string $image;

    public function __construct(int $id, string $name, string $email, string $password, string $about, string $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->about = $about;
        $this->image = $image;

        self::getId($this->id);
        self::getName($this->name);
        self::getEmail($this->email);
        self::getPassword($this->password);
        self::getAbout($this->about);
        self::getImage($this->image);

        $_SESSION['login'] = true;
        return $this;
    }

    public function getId(): int
    {
        $_SESSION['id'] = $this->id;
        return $this->id;
    } 

    public function getName(): string
    {
        $_SESSION['name'] = $this->name;
        return $this->name;
    }

    public function getEmail(): string
    {
        $_SESSION['email'] = $this->email;
        return $this->email;
    }

    public function getPassword(): string
    {
        $_SESSION['password'] = $this->password;
        return $this->password;
    }

    public function getAbout(): string
    {
        $_SESSION['about'] = $this->about;
        return $this->about;
    }

    public function getImage(): string
    {
        $_SESSION['image'] = $this->image;
        return $this->image;
    }

}

?>