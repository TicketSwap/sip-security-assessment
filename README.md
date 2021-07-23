# 🔒 TicketSwap Security Assessment

We tried to create a simple login form with a profile page. But we only had 20 minutes to build it and this is the final result. We used PHP because that's what we mostly use for other projects – but for simplicity we didn't use a framework. Your task is to help us make the application more secure. Are you up for the challange? :-)

### Installation

You need [Docker](https://www.docker.com/get-started) and Docker Compose to start up the environment.

1. To start the project:

```
docker-compose up --build
```

2. Access http://localhost:8000 to see the login form

### Requirements

**Infrastructure security**

- Find and fix security weaknesses in the Docker container

**Web application security**

- Find and fix security weaknesses in the PHP code
- The project must still work after fixes are applied. Working means:
  - users can login and see their profile page
  - wrong logins show 'login failed'

### Handing in the assessment

When you're finished securing the project and did all the git commits, you can zip the entire folder (don't forget the .git), and send it to us in reply of the mail you got with this assessment.

### Good luck

And again if you have any questions, [let us know](mailto:team-sip@ticketswap.com)!
