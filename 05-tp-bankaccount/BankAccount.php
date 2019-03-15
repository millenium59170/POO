<?php
/**
 * Nous allons créer un système de gestion de compte en banque en POO.
 *
 * Nous aurons tout d'abord le compte en banque classique représentée par la classe BankAccount.
 * Il possédera un identifiant (int), un propriétaire (string) et une balance (float).
 * On devra définit l'identifiant et le propriétaire dans le constructeur. La balance pourra également
 * être définie dans le constructeur mais de manière optionnelle.
 */
class BankAccount
{
    private $identifiant;
    private $proprietaire;
    protected $balance;

    public function getBallance()
    {
        echo $bankAccount01->getBallance();
        $this->balance = $balance;
    }

    public function depositMoney()
    {

    }

    public function withdrawMoney()
    {
        $bankAccount01->withdrawMoney(10000);
    }

    public function applyInterest()
    {    // Augmente le montant du livret avec un intérêt de 0,75%
        $savingAccount01->applyInterest(0.75);
    }

    public function wire()
    {
        $bankAccount01->wire(10000, $savingAccount01);
    }

}

class SavingAccount extends BankAccount
{
    public function __construct($proprietaire)
    {
        $this->proprietaire = $proprietaire;
    }
    public function wire($bankAccount01)
    {
        // L'attaque dépend de la force du personnage
        // attaquant.
        $bankAccount01->wire(10000, $savingAccount01);
    }
}