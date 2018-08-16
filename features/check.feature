Feature:

  Scenario: Simple password check
    Given the request body is:
    """
    {
      "password": "abc123"
    }
    """
    When I request "/check" using HTTP POST
    Then the response code is 200
    And the response content is equal to:
      """
      {
          "success": true,
          "valid": true,
          "message": null
      }
      """
