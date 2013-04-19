Feature:
  In order to know my website works
  As a website user
  I want to visit my website

  Scenario: Pull up homepage
    Given I am on the homepage
    Then I should see "It's Majax"

  Scenario: Test the php category
    Given I am on the homepage
    When I follow "PHP"
    Then I should see "PHP" in the ".page-title" element

  Scenario: Getting Started
    Given I am a programmer writing a test
    When I make my first attempt at testing with Behat
    Then it just works