Feature: Labels

  Scenario: Returning a collection of labels
    When I request "GET /v1/labels?user_id=1"
    Then I get a "200" response
    And scope into the first "data" property
    And the properties exist:
        """
        id
        label
        type
        groupe
        """
    And the "id" property is an integer

  Scenario: Listing all labels is not possible
    When I request "GET /v1/labels"
    Then I get a "400" response

  Scenario: Finding a specific label
    When I request "GET /v1/labels/1"
    Then I get a "200" response
    And scope into the "data" property
    And the properties exist:
        """
        id
        label
        type
        groupe
        """
    And the "id" property is an integer

  Scenario: Create a new label
    When I request "POST /v1/labels?user_id=3&label=cyril.leschaud@gmail.com&type_id=1&groupe_id=2"
    Then I get a "200" response
    And scope into the "data" property
    And the properties exist:
        """
        id
        label
        type
        groupe
        """
    And the "id" property is an integer

  Scenario: Create a new label with wrong args
    When I request "POST /v1/labels"
    Then I get a "400" response

  Scenario: Update a specific label
    When I request "PUT /v1/labels/1?user_id=1&label=coralie.leschaud@gmail.com"
    Then I get a "200" response
    And scope into the "data" property
    And the properties exist:
        """
        id
        label
        type
        groupe
        """
    And the "id" property is an integer

  Scenario: Update a specific label with wrong args
    When I request "PUT /v1/labels/1?label=coralie.leschaud@gmail.com"
    Then I get a "400" response

  Scenario: Update a non existant label
    When I request "PUT /v1/labels/0?user_id=1&label=coralie.leschaud@gmail.com"
    Then I get a "400" response

  Scenario: Searching non existent label
    When I request "GET /v1/labels/0"
    Then I get a "200" response
    And the "data" property contains 0 items

 # Scenario: Destroy one label
 #   When I request "DELETE /v1/labels/43"
 #   Then I get a "200" response
 #   And the "data" property contains "ok"

  Scenario: Destroy a non existent label
    When I request "DELETE /v1/labels/0"
    Then I get a "404" response