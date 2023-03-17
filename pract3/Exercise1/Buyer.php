<?php
class Buyer
{
    public string $surname;
    public string $name;
    public string $patronymic;
    public string $address;
    public int $creditCardNumber;
    public int $bankAccountNumber;
    function __construct(
        string $surname,
        string $name,
        string $patronymic,
        string $address,
        int $creditCardNumber,
        int $bankAccountNumber
    ) {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
        $this->address = $address;
        $this->creditCardNumber = $creditCardNumber;
        $this->bankAccountNumber = $bankAccountNumber;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setPatronymic(string $patronymic)
    {
        $this->patronymic = $patronymic;
    }
    public function setAddress(string $address)
    {
        $this->address = $address;
    }
    public function setCreditCardNumber(int $creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;
    }
    public function setBankAccountNumber(int $bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;
    }


    function getSurname(): string
    {
        return $this->surname;
    }
    function getName(): string
    {
        return $this->name;
    }
    function getPatronymic(): string
    {
        return $this->patronymic;
    }
    function getAddress(): string
    {
        return $this->address;
    }
    function getCreditCardNumber(): int
    {
        return $this->creditCardNumber;
    }
    function getBankAccountNumber(): int
    {
        return $this->bankAccountNumber;
    }

    public function getAllInformation(int $key)
    {
        echo ("$key $this->surname $this->name $this->patronymic $this->address $this->creditCardNumber $this->bankAccountNumber") . PHP_EOL;
    }

    function print(
        string $surname,
        string $name,
        string $patronymic,
        string $address,
        int $creditCardNumber,
        int $bankAccountNumber
    ): void {
        echo 'фамилия: ' . $surname;
        echo 'имя: ' . $name;
        echo 'отчество: ' . $patronymic;
        echo 'адрес: ' . $address;
        echo 'номер кредитной карточки: ' . $creditCardNumber;
        echo 'номер банковского счета: ' . $bankAccountNumber;
    }
}
