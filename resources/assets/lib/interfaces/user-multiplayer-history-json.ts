// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

import BeatmapJson from './beatmap-json';
import BeatmapsetJson from './beatmapset-json';
import RoomJson from './room-json';

// TODO: change to RoomType?
export type UserMultiplayerHistoryIndexJson = Record<'playlists' | 'realtime', UserMultiplayerHistoryJson>;

export default interface UserMultiplayerHistoryJson {
  beatmaps: BeatmapJson[];
  beatmapsets: BeatmapsetJson[];
  category: 'playlists' | 'realtime';
  cursor: unknown;
  rooms: (RoomJson & Required<Pick<RoomJson, 'playlist'>>)[];
}
