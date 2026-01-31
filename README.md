# Tutoom Activity Module for Moodle

Tutoom is a realtime collaborative whiteboard for teaching. The Tutoom plugin allows you to seamlessly create and join interactive whiteboard rooms directly within your Moodle courses.

📚 **[Official Documentation](https://tutoom.com/help/articles/native-moodle-plugin)**

---

## Features

- **Seamless Integration** - Create Tutoom rooms directly from Moodle activities
- **Real-time Collaboration** - Interactive whiteboard for live teaching sessions
- **Session Recordings** - Automatic recording and playback capabilities
- **Role Management** - Configurable moderator and viewer permissions
- **Multi-instance Support** - Multiple Tutoom activities per course with independent rooms
- **Easy Access** - One-click join for students and teachers

---

## Requirements

- **Moodle**: Version 4.1 to 4.5
- **PHP**: 7.4 or higher (recommended: PHP 8.0+)
- **Tutoom Account**: API credentials from [tutoom.com](https://tutoom.com)

---

## Installation

### 1. Install the Plugin

**Option A: Via Moodle Plugin Directory**
1. Go to `Site administration > Plugins > Install plugins`
2. Upload the `mod_tutoom.zip` file
3. Click "Install plugin from the ZIP file"
4. Follow the on-screen installation prompts

**Option B: Manual Installation**
1. Extract the ZIP file
2. Copy the `tutoom` folder to `moodle/mod/`
3. Visit `Site administration > Notifications`
4. Click "Upgrade Moodle database now"

### 2. Configure API Credentials

1. Go to `Site administration > Plugins > Activity modules > Tutoom`
2. Enter your Tutoom API credentials:
   - **API Secret Key**: Your Tutoom API Secret key
3. Configure optional settings:
   - **Recording Auto-start**: Enable automatic recording when rooms start
   - **Activity Logging**: Enable detailed activity logging
4. Click "Save changes"

### 3. Get API Credentials

If you don't have API credentials yet:
1. Create an account at [tutoom.com](https://tutoom.com)
2. Navigate to your account settings
3. Generate your API Secret key
4. Copy the credentials to your Moodle plugin configuration

---

## How It Works

### Creating a Tutoom Activity

1. Turn editing on in your course
2. Click "Add an activity or resource"
3. Select "Tutoom" from the activity list
4. Configure your activity:
   - **Name**: Activity title (visible to students)
   - **Description**: Activity instructions
   - **Recording**: Enable/disable session recording
   - **Welcome Message**: Custom message displayed when joining
   - **Role Assignments**: Configure who can moderate sessions
5. Save the activity

### Starting a Room

1. Open the Tutoom activity
2. Click "Start Room" (moderators only)
3. The room is created and ready for participants
4. Share the activity link with students

### Joining a Session

1. Students click on the Tutoom activity
2. Click "Join Room"
3. Interactive whiteboard opens in a new window
4. Collaborate in real-time with teacher and classmates

### Managing Recordings

1. After a session ends, recordings are automatically saved
2. View recordings from the Tutoom activity page
3. Click "View Recording" to play back the session
4. Recordings are organized by date and session

---

## Compatibility

| Moodle Versions | Tutoom Plugin Version |
| --------------- | --------------------- |
| 3.9.0 - 5.0       | v1.0.0 (2025020100)   |

**Note**: This plugin requires Moodle 4.1 LTS or higher. For older Moodle versions, please contact support.

---

## Support & Documentation

- **Documentation**: [Tutoom Help Center - Moodle Plugin](https://tutoom.com/help/articles/native-moodle-plugin)
- **Help Center**: [tutoom.com/help](https://tutoom.com/help/)
- **Commercial Support**: Contact us through the Help Center for enterprise support options

---

## Pricing

Tutoom offers a generous free plan to get started. When you're ready to scale, upgrade to a paid plan for additional features and capacity.

**View detailed pricing and plan comparisons at [Tutoom Pricing](https://www.tutoom.com/pricing)**

---

## Contributing

We welcome contributions from the community! To contribute:

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

We will review all contributions and respond as soon as possible.

---

## License

This plugin is licensed under the **GNU General Public License v3.0 or later**.

See the [GNU GPL v3](https://www.gnu.org/copyleft/gpl.html) for more details.

---

## Credits

**Developed by**: [Tutoom Inc.](https://tutoom.com)

**Copyright**: © 2025 onwards, Tutoom Inc.

---

*For the latest updates and announcements, visit [tutoom.com](https://tutoom.com)*
