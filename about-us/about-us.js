/* ======================================== */
/* GLOBX - ABOUT US PAGE FUNCTIONALITY     */
/* ======================================== */

document.addEventListener('DOMContentLoaded', function() {
  // Team Pagination Functionality (matches testimonials pattern)
  const teamPanes = document.querySelectorAll('.gx-team-pane');
  const teamPaginationElements = document.querySelectorAll('.gx-team-pagination-pill, .gx-team-pagination-dot');
  let teamAutoAdvanceTimer = null;
  const TEAM_AUTO_ADVANCE_INTERVAL = 5000; // 5 seconds
  let currentTeam = 1;
  const totalTeams = teamPanes.length;
  const TEAM_FADE_DURATION = 400; // ms, matches CSS

  // Function to switch team panes with fade
  function switchTeam(teamId) {
    const currentPane = document.querySelector('.gx-team-pane-active');
    const targetPane = document.getElementById('team-' + teamId);
    
    // Remove active classes from all pagination elements
    teamPaginationElements.forEach(element => element.classList.remove('active'));
    
    // Fade out current pane
    if (currentPane && currentPane !== targetPane) {
      currentPane.classList.remove('gx-team-pane-active');
      setTimeout(() => {
        // Fade in target pane
        if (targetPane) {
          targetPane.classList.add('gx-team-pane-active');
        }
      }, TEAM_FADE_DURATION);
    } else if (targetPane) {
      // If no current or same, just show
      teamPanes.forEach(pane => pane.classList.remove('gx-team-pane-active'));
      targetPane.classList.add('gx-team-pane-active');
    }
    
    // Activate the correct pagination element
    const targetPagination = document.querySelector(`[data-team="${teamId}"]`);
    if (targetPagination) {
      targetPagination.classList.add('active');
    }
    
    currentTeam = parseInt(teamId, 10);
  }

  // Add click event listeners to pagination elements
  teamPaginationElements.forEach(element => {
    element.addEventListener('click', function() {
      const teamId = this.getAttribute('data-team');
      switchTeam(teamId);
      startTeamAutoAdvance(); // Reset timer on manual click
    });
  });

  function teamAutoAdvance() {
    currentTeam = currentTeam % totalTeams + 1;
    switchTeam(currentTeam);
  }

  function startTeamAutoAdvance() {
    if (teamAutoAdvanceTimer) clearInterval(teamAutoAdvanceTimer);
    teamAutoAdvanceTimer = setInterval(teamAutoAdvance, TEAM_AUTO_ADVANCE_INTERVAL);
  }

  // Initialize first team and start auto-advance
  switchTeam(currentTeam);
  startTeamAutoAdvance();

  // Track Record Statistics Animation
  function animateTrackRecordCount(element, target, suffix = '') {
    let current = 0;
    const increment = target / 50; // 50 steps for smooth animation
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      element.textContent = Math.floor(current) + suffix;
    }, 30);
  }

  function startTrackRecordAnimation() {
    const statNumbers = document.querySelectorAll('.gx-track-record-stat-number');
    statNumbers.forEach(element => {
      const target = parseInt(element.getAttribute('data-count'), 10);
      let suffix = '';
      if (element.textContent.includes('%')) suffix = '%';
      if (element.textContent.includes('+')) suffix = '+';
      animateTrackRecordCount(element, target, suffix);
    });
  }

  // Observe track record section for animation trigger
  const trackRecordSection = document.querySelector('.gx-track-record-section');
  if (trackRecordSection && window.IntersectionObserver) {
    const observer = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        startTrackRecordAnimation();
        observer.disconnect();
      }
    }, { threshold: 0.3 });
    observer.observe(trackRecordSection);
  }
}); 